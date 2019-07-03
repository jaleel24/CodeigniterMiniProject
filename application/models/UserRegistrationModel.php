<?php
class UserRegistrationModel extends CI_Model{

    public function registration_data_insert($object){
        $this->db->insert('user_registration',$object);
    }

    public function isValidUser($email,$password){
      $this->db->select('*')
      ->from('user_registration')
      ->where(['email'=>$email,'password'=>$password]);
      $query=$this->db->get();
      if($query->num_rows()){
        return $query->row(0);
      }
      else{
        return NULL;
      }
    }

    public function get_userBy_id($id){
      $this->db->select("*")
           ->from('user_registration')
           ->where('id',$id);
      $answer = $this->db->get();
      return $answer->result();
    }

    public function add_number_model($object){
      $this->db->insert('addphone_number',$object);
    }

    public function fetchUserNumberListModel($id){
      $this->db->select('*')
               ->from('addphone_number')
               ->where('user_id',$id);
        $answer=$this->db->get();
        return $answer->result();
    }
}
?>
