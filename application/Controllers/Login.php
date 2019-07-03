<?php
class Login extends MY_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('User_model','model');
  }

  public function index()
  {
     $this->load->helper('form');
    // $this->load->model('User_model','model');
     //$this->model->getUser();
     $this->load->view('public/admin_login');
  //   $this->load->view('public/phone');

  }

  public function admin_login()
  {
      //Setting values for tabel columns
      //$object = new stdClass();
      // $object = (object)$this->input->post(NULL, TRUE);
      //print_r($object);

      //exit;
      $data = array(
      'fname' => $this->input->post('fname', TRUE),
      'lname' => $this->input->post('lname', TRUE),
      'email' => $this->input->post('email', TRUE),
      'City' => $this->input->post('city', TRUE),
      'type' => $this->input->post('type', TRUE),
      'user_name' => $this->input->post('user_name', TRUE),
      'password' => $this->input->post('password', TRUE)
      );

      print_r($data);

//exit;
      //$object = (object) $data;
    //echo $this->input->get('uname', TRUE);
      //Transfering data to Model
      //$this->load->model('User_model','model');
      $this->model->form_insert($data);
      echo 'Data Inserted Successfully';
      //Loading View
      //$this->load->view('public/admin_login');
      //$this->load->view('insert_view', $data);
      //  echo "User Logged in:)";
  }

public function userlist(){
  $list=$this->model->getUserList();

    $data = array(
    'records' => $list
  );
    $this->load->helper('form');
  $this->load->view('public/user', $data);
}

public function individualuserlist(){

  $id=$this->input->post('user_id',TRUE);

  $list=$this->model->getuserdata($id);

    $data = array(
    //'title' => 'User List',
    'records' => $list
  );
  // print_r($data);
  // exit;
    $this->load->helper('form');
    $this->load->view('public/individualuser', $data);
}


public function update($id){

    $this->load->helper('form');

     $data['user_id'] = $id;
  //   $data['user_name'] =$user_name;
     $this->load->View('public/phone', $data);
}

public function insert_phone(){
    $object = new stdClass();
    $object = (object)$this->input->post(NULL, TRUE);
    print_r($object);
    $this->model->form_phon($object);
    echo "phone numbers are added successfuly";
}

  public function getnumberlist(){
      $list=$this->model->getphonenumbers();
      $data = array(
      //'title' => 'User List',
        'records'=> $list
      );
      $this->load->helper('form');
      $this->load->view('public/user_numbers', $data);
    }
}
 ?>
