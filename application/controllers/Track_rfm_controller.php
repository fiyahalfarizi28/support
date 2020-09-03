<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Track_rfm_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('rfm_model');
        $this->load->model('auth_model');
    }

	public function index()
	{
        if($this->auth_model->logged_id()) {
            $data['SESSION_USER_ID'] = $this->session->userdata('USER_ID');
            $data['track_rfm'] = $this->getTrackRFM();

            $array_crud = array(
                'select' => '*',
                'table' => TB_DETAIL,
            );

            $data['rfmList'] = $this->rfm_model->get_crud($array_crud);
            
            $this->template->load('template','rfm/track_rfm',$data);
        } else {
            $this->load->view('login/form_login');
        }
    }
    
    public function getTrackRFM()
    {
        $array_crud = array(
            'table' => TB_DETAIL,
            'where' => array(
            'request_by' => $this->session->userdata('USER_ID'),
            'request_status !=' => STT_REJECT,
            'result_status !=' => STT_SOLVED,
            ),
        );
        return $this->rfm_model->get_crud($array_crud);
        
    }

}