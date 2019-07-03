<?php
  class UserReg_Model extends CI_Model{

    public function form_insert($object){
      $this->db->insert('user_registration',$object);
    }
    public function valid_userdb($username,$email, $password){
      $q=$this->db->where(['u_name'=>$username,'email'=>$email,'password'=>$password])
                ->get('user_registration');
        if($q->num_rows()){
      return $q->row(0);
    }
    else{
      return NULL;
    }
    }
    public function getuserdata(){
      $this->db->select("*");
      $this->db->from('user_registration');
      $query= $this->db->get();
      return $query->result();
    }
    public function get_userBy_id($id){
      $this->db->select("*")
      ->from('user_registration')
      ->where('id',$id);
      $q=$this->db->get();
      //the lower comment will give us the std object at the given index so that we donot have to pass the array when we need to update the data so row is more efficient
    // return $q->row();
    //we can also user result why do extra work
    return $q->row(0);
    }
    public function update_user_data_db($id,$user){
    return $this->db
            ->where('id',$id)
            ->update('user_registration',$user);
    }
    public function delete_user_data_db($id){
      return $this->db->delete('user_registration',['id'=>$id]);
    }

    public function insert_phone_number($object){
      $this->db->insert('addphone_number' ,$object);
    }
    public function showuser_numbersmodel(){
      $this->db->select("*");
      $this->db->from('addphone_number');
      $query = $this->db->get();
      return $query->result();
    }
    public function get_userBy_id_numbers($id){
      $this->db->select("*")
      ->from('addphone_number')
      ->where('id',$id);
      $q = $this->db->get();
      return $q->row(0);
    }
    public function  update_user_numberlistdb($user_id,$user){
      return $this->db
      ->where('user_id',$user_id)
      // tablename and 2 argument array which we want to update
      ->update('addphone_number',$user);
    }
    public function delete_usernumberBy_id($id){
      return $this->db->delete('addphone_number',['user_id'=>$id]);
    }
  }


 ?>
