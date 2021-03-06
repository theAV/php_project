<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Usersession extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('user_model');
                $this->load->helper('url_helper');
                $this->load->library('session');
                
        }
        public function get_sesion_user(){
            $response = array("error" => FALSE);

            if($this->session->userdata('session_id')){
                $response['loggedin'] = TRUE;
                $response['message'] = 'You are loggedin.';
                $response['response_code'] =  200;
                echo json_encode($response);
            }else{
                $response['loggedin'] = FALSE;
                $response['message'] = 'You are not loggedin.';
                $response['response_code'] =  500;
                echo json_encode($response);
            }
        }
    }
?>