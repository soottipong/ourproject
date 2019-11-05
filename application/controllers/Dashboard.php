<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            // User login status 
            $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
            $this->load->model(array('user'));
    }

    public function index()
    {
        if($this->isUserLoggedIn){
            
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data = array(
                'title' => 'views'
            );
            $data['user']   = $this->user->getRows($con);

            $this->load->view('dashboard/index');
        }
    }

}