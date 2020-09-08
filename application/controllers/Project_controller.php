<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('rfp_model');
        $this->load->model('auth_model');
    }

	public function index()
	{
        if($this->auth_model->logged_id()) {
            $data['SESSION_USER_ID'] = $this->session->userdata('USER_ID');
            $this->template->load('template','project/table',$data);
        } else {
            $this->load->view('login/form_login');
        }
    }

    public function btn_create()
    {
        
        $array_crud = array(
            'table' => TB_RFP,
        );
        $data['rfpList'] = $this->rfp_model->get_crud($array_crud);

        $array_crud = array(
            'table' => TB_REQUEST_TYPE,
        );
        $data['request_type'] = $this->rfp_model->get_crud($array_crud);
        
        $array_crud = array(
            'table' => TB_PROBLEM_TYPE,
        );
        $data['problem_type'] = $this->rfp_model->get_crud($array_crud);
        
        $array_crud = array(
            'table' => TB_PROJECT,
        );
        $data['projectList'] = $this->rfp_model->get_crud($array_crud);

        $this->load->view('project/form_create', $data);
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
        $task_name = $this->input->post('task_name');;
        $detail = $this->input->post('detail');;

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
        echo json_encode($data);
    }

}
?>