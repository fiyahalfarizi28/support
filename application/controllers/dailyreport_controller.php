<?php
class dailyreport_controller extends ci_controller{
    
    function __construct() {
        parent::__construct();
		$this->load->model('daily_report_model');
        $this->load->model('auth_model');
        $this->load->model('rfm_model');
    }
    
    function index()
    {
        if($this->auth_model->logged_id()) {
            $data['SESSION_USER_ID'] = $this->session->userdata('USER_ID');
            $data['daily_activities'] = $this->getDailyActivity();

            // Validasi daftar rfm, bisa dimasukkan ke $array_crud
            $array_crud = array(
                'select' => '*',
                'table' => TB_DETAIL,
            );

            // $data['rfmList'] = $this->rfm_model->get_crud($array_crud);
            $data['rfmList'] = $this->daily_report_model->get_crud($array_crud);
			
			$array_crud = array(
                'select' => '*',
                'table' => TB_PROJECT
            );

            $data['projectList'] = $this->daily_report_model->get_crud($array_crud);

            $array_crud = array(
                'select' => '*',
                'table' => TB_TASK,
                'where' => array(
                    'assign_to' => $this->session->userdata('USER_ID'),
                    'status' => STT_ON_PROGRESS,
                ),
                'where' => array(
                    'assign_to' => $this->session->userdata('USER_ID'),
                    'status' => STT_PENDING
                )
            );

            $data['taskList'] = $this->daily_report_model->get_crud($array_crud);
			
            $this->template->load('template','daily_report/table', $data);
        }else {
            $this->load->view('login/form_login');
        }
    }
	
	public function getDailyActivity()
    {
        
        $array_crud = array(
            'table' => TB_DAILY_ACTIVITY,
            'where' => array(
            'user_id' => $this->session->userdata('USER_ID')
            ),
            'order_by' => "last_update DESC"
        );
        return $this->daily_report_model->get_crud($array_crud);
    }
	
	public function post_request_dr()
    {
        if(!$this->auth_model->logged_id())
        {
            $data = array('isValid' => 0, 'isPesan' => '<div class="alert alert-danger">Sesi telah berakhir, silahkan segarkan halaman ini terlebih dahulu. <a href="./">Segarkan</a></div>');
            echo json_encode($data);
            die();
        }
		
        $date_now = date('Y-m-d');
        $user_id = $this->session->userdata('USER_ID');
        $project_id = null;
        $task_id = null;
        $rfm_id = null;
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');
        $projectFlag = $this->input->post('projectFlag');

        if ($this->input->post('project_id') !== "") {
            $project_id = $this->input->post('project_id');
        }

        if ($this->input->post('task_id') !== "") {
            $task_id = $this->input->post('task_id');
        }

        if ($this->input->post('rfm_id') !== "") {
            $rfm_id = $this->input->post('rfm_id');
        }
        
        if(empty($project_id) && empty($rfm_id)  && empty($keterangan) ) {
            $isValid = 0;
            $isPesan = "<div class='alert alert-danger'>Task Harus Diisi !!!</div>";
        }elseif(empty($status)) {
            $isValid = 0;
            $isPesan = "<div class='alert alert-danger'>Status Pekerjaan Harus Diisi !!!</div>";
        }else{

            $array_crud = array(
                'table' => TB_DAILY_ACTIVITY,
                'where' => array(
                    'user_id' => $this->session->userdata('USER_ID'),
                    'tanggal' => $date_now,
                )
            );

            $sql = $this->daily_report_model->get_crud($array_crud);
            
            if (!empty($task_id)) {
                if($status == STT_DONE) {
                    $status = STT_ON_PROGRESS;
                }

                $array_update_task = array(
                    'status' => $status,
                );
    
                $this->db->where('id', $task_id);
                $update_task = $this->db->update(TB_TASK, $array_update_task);

                $no_rfm = $this->db->where('id', $task_id)->get(TB_TASK)->row()->no_rfm;
                $rfm_id = $this->db->where('no_rfm', $no_rfm)->get(TB_DETAIL)->row()->id;
            }

            $array_insert = array(
                'user_id'       => $user_id,
                'tanggal'      	=> $date_now,
                'project_id'    => $project_id,
                'task_id'       => $task_id,
                'rfm_id'        => $rfm_id,
                'status'        => $status,
                'keterangan' 	=> $keterangan,
            );
        
	    	$insert_data = $this->db->insert(TB_DAILY_ACTIVITY, $array_insert);

            $array_update_rfm = array(
                'result_status' => $status,
            );

            $this->db->where('id', $rfm_id);
            $update_rfm = $this->db->update(TB_DETAIL, $array_update_rfm);

            if(!$insert_data) {
                $isValid = 0;
                $isPesan = "<div class='alert alert-danger'>Gagal menambahkan daily activity</div>";
                        
                $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
                echo json_encode($data);
                die(); 
            }else {
                $isValid = 1;
                $isPesan = "<div class='alert alert-success'>Berhasil menambahkan daily activity</div><div class='alert alert-success'>Harap lapor ke HEAD IT/SUPERVISOR IT jika sudah menyelesaikan task tersebut!</div>";
            }
            
        }

        $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
        echo json_encode($data);
    }


}