<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darwhin_controller extends CI_Controller {
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
                    'user_id' => '68',
                )
            );

            $data['userList'] = $this->daily_report_model->get_crud($array_crud);

            $this->template->load('template','dashboard/Darwhin_Sinarta',$data);
        } else {
            $this->load->view('login/form_login');
        }
    }

}