<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hamsudi_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('daily_report_model');
        $this->load->model('auth_model');
    }

	public function index()
	{
        if($this->auth_model->logged_id()) {
        
            $data['SESSION_USER_ID'] = $this->session->userdata('USER_ID');

            $array_crud = array(
                'select' => '*',
                'table' => TB_USER,
                'where' => array(
                    'user_id' => '3',
                )
            );

            $data['user'] = $this->daily_report_model->get_crud($array_crud)->row();

            $this->template->load('template','dashboard/Hamsudi',$data);
        } else {
            $this->load->view('login/form_login');
        }
    }

}