<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Registration_C extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('UserRegistrationModel','model');
        }
        public function index(){
            $this->load->helper('forms');
            $this->load->view('public/RegistrationForm');
        }
}

?>
