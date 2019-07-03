<?php
class Registration_C extends CI_Controller{
        function __construct() {
            parent::__construct();
            $this->load->model('UserRegistrationModel','model');
            $this->load->library('session');
        }

        public function index(){
            $this->load->helper('form');
            $this->load->view('public/RegistrationForm');
        }

        public function unauthorizedUser(){
          $this->load->view('public/unauthorizedUserView');
        }

        public function successRegistration(){
          $this->load->view('public/successRegistration');
        }

        public function welcomeUser(){

          $isLogedin = $this->session->logged_in;
          if($isLogedin === TRUE){
            //print_r($this->session->userObject->id);
              $this->load->view('public/welcomeUserView');
          }else{
          $this->session->set_flashdata('message','Access Denied Kindly Login First ');
          redirect('Registration_C/loginView');
          }
        }

        public function loginView(){
          $this->load->helper('form');
          $this->load->view('public/loginView');
        }

        public function registerUser(){
          $this->load->library('form_validation');
          $this->form_validation->set_rules('email','email','required|valid_email|trim');
          $this->form_validation->set_rules('password','password','required|alpha_numeric|max_length[10]');
          $this->form_validation->set_rules('passconf','passwordConfirmation','required|matches[password]|alpha_numeric|max_length[10]');
          if($this->form_validation->run() === TRUE){
              $object= new stdClass;
              $object =(object)$this->input->post(NULL,TRUE);
              $this->model->registration_data_insert($object);
              redirect('Registration_C/successRegistration');
          }
          else{
              $this->load->view('public/RegistrationForm');
          }
        }

        public function loginUser(){
          $this->load->library('form_validation');
          $this->form_validation->set_rules('email','email','required|valid_email|trim');
          $this->form_validation->set_rules('password','password','required|alpha_numeric|max_length[10]');
        //$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
          if($this->form_validation->run() === TRUE){
             $email = $this->input->post('email');
             $password =$this->input->post('password');
             /* load the Model*/
             $this->load->model('UserRegistrationModel');
             /* load the session library to use session*/
             $this->load->library('session');
             $userObject = $this->model->isValidUser($email,$password);
             if($userObject !== NULL){
                $this->session->set_userdata('email',$userObject->email);
                //$this->session->set_userdata('password',$userObject->password);
                $this->session->set_userdata('logged_in',TRUE);
                $this->session->set_userdata('userObject',$userObject);
                redirect('Registration_C/welcomeUser');
             }
             else{
               $this->session->unset_userdata('email');
               $this->session->unset_userdata('password');
               $this->session->unset_userdata('logged_in',False);
               redirect('Registration_C/unauthorizedUser');
             }
          }
        else{
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('password');
          $this->session->unset_userdata('logged_in',False);
          $this->load->view('public/loginView');
            }
        }


        public function registration_data_insert_C(){
          $object= new stdClass;
          $object =(object)$this->input->post(NULL,TRUE);
          $this->model->registration_data_insert($object);
          redirect('Registration_C/');
        }

        public function logoutUser(){
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('password');
          $this->session->unset_userdata('logged_in',False);
          //$this->session->sess_destroy();
          $this->session->set_flashdata('message','successfuly-logged-out');
          redirect('Registration_C/loginView');
        }

        public function showUser_data(){
          $isLoggedin = $this->session->logged_in;
          if($isLoggedin === TRUE){
            $id= $this->session->userObject->id;
            $data = $this->model->get_userBy_id($id);
            $list = array(
              'records'=>$data
            );
            $this->load->helper('form');
            $this->load->view('public/userList',$list);
          }
        else{
          $this->session->set_flashdata('message',' Kindly Login First');
          redirect('Registration_C/loginView');
        }
          }
          public function add_numberbyID($id){
            $this->load->helper('form');
            $data['user_id']=$id;
            $this->load->view('public/addnumber_form',$data);
          }
          public function add_number_controller(){
            $isLoggedin = $this->session->logged_in;
            if($isLoggedin ===TRUE){
              $object = new stdClass;
              $object = (object)$this->input->post(NULL,TRUE);
              $this->model->add_number_model($object);
              $this->session->set_flashdata('message','Data Inserted Successfuly');
              redirect('Registration_C/loginView');
            }
            else{
              $this->session->set_flashdata('message','Something Went Wrong Try again');
              redirect('Registration_C/loginView');
            }

          }
          public function fetchUserNumberListController(){
            $isLoggedin = $this->session->logged_in;
            if($isLoggedin === TRUE){
              $id = $this->session->userObject->id;
              $data = $this->model->fetchUserNumberListModel($id);
              $list = array(
                'records'=>$data
              );
              $this->load->helper('form');
              $this->load->view('public/NumberListForm',$list);
            }
            else{
              $this->session->set_flashdata('message','Access denied Kindly Login First');
              redirect('Registration_C/loginView');
            }
          }
          public function show_numberbyID($id){
            $this->load->helper('form');
            $data['user_id']=$id;
            $this->load->view('public/NumberListForm',$data);
          }
}

?>
