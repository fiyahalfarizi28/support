<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yosep_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('daily_report_model');
        $this->load->model('auth_model');
    }

	public function index()
	{
        if($this->auth_model->logged_id()) {
        
            $data['SESSION_USER_ID'] = $this->session->userdata('USER_ID');
            $data['daily_activities'] = $this->getDailyActivity();

            $array_crud = array(
                'select' => '*',
                'table' => TB_USER,
                'where' => array(
                    'user_id' => '1333',
                )
            );

            $data['user'] = $this->daily_report_model->get_crud($array_crud)->row();

            $array_crud = array(
                'select' => '*',
                'table' => TB_DETAIL,
            );

            $data['rfmList'] = $this->daily_report_model->get_crud($array_crud);

			$array_crud = array(
                'select' => '*',
                'table' => TB_PROJECT
            );

            $Q = "SELECT DISTINCT ticket_support.task.project_id AS id, ticket_support.project.project_name AS project_name
            FROM ticket_support.task
            INNER JOIN ticket_support.project
            ON ticket_support.task.project_id=ticket_support.project.id
            WHERE ticket_support.task.assign_to=".$this->session->userdata('USER_ID').";
            ";

            $data['projectList'] = $this->daily_report_model->get_crud($array_crud);
            $data['filteredProjectList'] = $this->db->query($Q)->result();

            $array_crud = array(
                'select' => '*',
                'table' => TB_TASK,
            );

            $data['DataTaskList'] = $this->daily_report_model->get_crud($array_crud);

            $this->template->load('template','dashboard/Yosep_Heryana',$data);
        } else {
            $this->load->view('login/form_login');
        }
    }

    public function getDailyActivity()
    {
        
        $array_crud = array(
            'table' => TB_DAILY_ACTIVITY,
            'where' => array(
                'user_id' => '1333',
            ),
            'order_by' => "last_update DESC"
        );
        return $this->daily_report_model->get_crud($array_crud);
    }

}