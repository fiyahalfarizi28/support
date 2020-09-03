<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
    }

	public function index()
	{
        if($this->auth_model->logged_id()) {
            $SESSION_USER_ID = $this->session->userdata('dpm_online.'.'USER_ID');
            $data['SESSION_USER_ID'] = $SESSION_USER_ID;

            // $Q = 'SELECT DISTINCT ticket_support.task.project_id AS id, ticket_support.project.project_name AS project_name
            // FROM ticket_support.task
            // INNER JOIN ticket_support.project
            // ON ticket_support.task.project_id=ticket_support.project.id;
            // ';

            $Q = 'SELECT DISTINCT ticket_support.task.project_id AS id, ticket_support.project.project_name AS project_name, ticket_support.project.last_update AS last_update
            FROM ticket_support.task
            INNER JOIN ticket_support.project
            ON ticket_support.task.project_id=ticket_support.project.id;
            ';
            $data['filteredProjectList'] = $this->db->query($Q)->result();

            //===================================================
            
            $this->template->load('template','dashboard/activity',$data);
        }else {
            $this->load->view('login/form_login');
        }
    }

}