<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('rfp_model');
        $this->load->model('rfm_model');
        $this->load->model('auth_model');
    }

	public function index()
	{
        if($this->auth_model->logged_id()) {
            $data['SESSION_USER_ID'] = $this->session->userdata('USER_ID');
            $data['task_project'] = $this->getTask();

            $SESSION_USER_ID = $this->session->userdata('dpm_online.'.'USER_ID');
            $data['SESSION_USER_ID'] = $SESSION_USER_ID;

            $Q = 'SELECT DISTINCT ticket_support.task.project_id AS id, ticket_support.project.project_name AS project_name, ticket_support.project.last_update AS last_update
            FROM ticket_support.task
            INNER JOIN ticket_support.project
            ON ticket_support.task.project_id=ticket_support.project.id;
            ';
            $data['ProjectList'] = $this->db->query($Q)->result();

            $this->template->load('template','project/table',$data);
        } else {
            $this->load->view('login/form_login');
        }
    }

    public function btn_create()
    {
        $id = $this->input->post('idx');
        $array_crud = array(
            'table' => TB_RFP,
        );
        $data['rfpList'] = $this->rfp_model->get_crud($array_crud);
        
        $array_crud = array(
            'table' => TB_PROJECT,
            'where' => array('id !=' => KODE_LAINNYA),
        );
        $data['projectList'] = $this->rfp_model->get_crud($array_crud);

        $array_crud = array(
            'table' => 'dpm_online.'.TB_USER,
        );
        $data['userList'] = $this->rfp_model->get_crud($array_crud);

        $this->load->view('project/form_create', $data);
    }

    public function getTask()
    {
        
        $array_crud = array(
            'table' => TB_TASK,
        );
        return $this->rfp_model->get_crud($array_crud);
    }

    public function set_assign_request()
    {
        $SESSION_USER_ID = $this->session->userdata('USER_ID');
        $id_rfp = $this->input->post('id_rfp');
        $notes = $this->input->post('notes');
        $assign_pic = $this->input->post('assign_pic');
        $target_date = $this->input->post('target_date');
        $date_now = date('Y-m-d H:i:s');
        $project_id = $this->input->post('project_id');
        $task_name = $this->input->post('task_name');
        $detail = $this->input->post('detail');
        $table_destination = TB_TASK;

        if(empty($assign_pic) || empty($target_date))
        {
            $isValid = 0;
            $isPesan = "<div class='alert alert-danger'>Pic Atau Tanggal Target Tidak Boleh Kosong</div>";
            
            $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
            echo json_encode($data);
            die(); 
        }
        
        $no_rfp = $this->db->where('id', $id_rfp)->get(TB_RFP)->row()->no_rfp;

        $array_insert = array(
            'no_rfp'            => $no_rfp,
            'project_id'        => $project_id,
            'task_name'         => $task_name,
            'description'       => $detail,
            'create_date'       => $date_now,
            'create_by'         => $SESSION_USER_ID,
            'assign_to'         => $assign_pic,
            'assign_date'       => $date_now,
            'target_date'       => $target_date,
            'status'            => STT_PENDING,
            'update_by'         => $SESSION_USER_ID,
        );

        $insert_data_task = $this->db->insert(TB_TASK, $array_insert);

        if(!$insert_data) {
            $isValid = 0;
            $isPesan = "<div class='alert alert-danger'>Gagal Menambah Task RFP</div>";
            
            $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
            echo json_encode($data);
            die(); 
        } else {
            $isValid = 1;
            $isPesan = "<div class='alert alert-success'>Berhasil Menambah Task RFP</div>";
        }

        $data = array('isValid' => $isValid, 'isPesan' => $isPesan);

        if(empty($_FILES['attachment']['name'])) {
            $insert_data = $this->db->insert($table_destination, $array_insert);
        } else{
            $insert_data = $this->db->insert($table_destination, $array_insert);
            $no=1;
            foreach ($_FILES['attachment']['name'] as $key => $value) {
                $name = $_FILES['attachment']['name'][$key];
                $tmp = $_FILES['attachment']['tmp_name'][$key];
                $size = $_FILES['attachment']['size'][$key];
                $ext = explode(".", $name);
                $extensi = end($ext);
                $maxsize = 1024 * 2000;
                $path = "upload/";

                if($size>=$maxsize) {
                    $isValid = 0;
                    $isPesan = "<div class='alert alert-danger'>Attachment $name max 2mb</div>";
                            
                    $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
                    echo json_encode($data);
                    die();
                } elseif(!in_array($extensi, $extensionList)) {
                    $isValid = 0;
                    $isPesan = "<div class='alert alert-danger'>Format attachment tidak di izinkan</div>";
                            
                    $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
                    echo json_encode($data);
                    die();
                } else {
                    if(trim($name)!=null) {
                        $explode_name = explode(".", $name);
                        $random_name = round(microtime(true)).'.'.end($explode_name);
                        $new_name = md5(date('YmdHis'))."-".$no++."-".$random_name;

                        $array_insert = array(
                            'filename'      => $name,
                            'full_filename' => $new_name,
                            'data_file'     => "upload/$new_name"
                        );
                        $insert_attachment = $this->db->insert(TB_ATTACHMENT_PROJECT, $array_insert);

                        if($insert_attachment) {
                            move_uploaded_file($tmp, $path.null.$new_name);
                        } else {
                            $isValid = 0;
                            $isPesan = "<div class='alert alert-danger'>Attachment gagal terkirim, tidak Terhubung Database.</div>";
                            
                            $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
                            echo json_encode($data);
                            die();
                        }
                    }
                }
            }
        }
        
        if(!$insert_data) {
            $isValid = 0;
            $isPesan = "<div class='alert alert-danger'>Format attachment tidak di izinkan</div>";
                    
            $data = array('isValid' => $isValid, 'isPesan' => $isPesan);
            echo json_encode($data);
            die(); 
        }

        echo json_encode($data);
    }

    public function add_field_task()
    {
        $data['idfield'] = $this->input->post('idfield');

        $array_crud = array(
            'table' => TB_USER,
            'where' => array(
                'group_menu' => 'IT',
                'flg_block' => 'N',
                )
        );
        $data['select_pic'] = $this->rfm_model->get_crud($array_crud);

        $this->load->view('project/field_task', $data);
    }

}
?>