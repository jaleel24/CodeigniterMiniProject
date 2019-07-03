<?php

class User_model extends CI_Model{

  public function form_insert($data){

    $this->db->insert('user_data',$data);

  }

  public function getUserList(){
   $this->db->select("*");
   $this->db->from('user_data');
   $query = $this->db->get();
   return $query->result();
  }

    public function form_phon($object){
    $this->db->insert('phone_numbers',$object);

  }
  public function getphonenumbers(){
    $this->db->select("*");
    $this->db->from('phone_numbers');
    $query = $this->db->get();
    return $query->result();
  }
//  public function getuserdata(){
  //  $this->db->query('SELECT * FROM user_data WHERE id = ?', $this->session->user_data('id'));

  //  return $query->row_array();

  //}
  public function getuserdata($id) {
    $this->db->select('*')
              ->from('user_data')
              ->where('id',$id);
              $q = $this->db->get();
    return $q->result();
}

}


 ?>
