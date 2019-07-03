<?php
class PostModel extends CI_Model {

 public function getPosts(){
  $this->db->select("*");
  $this->db->from('user_data');
  $query = $this->db->get();
  return $query->result();
 }

}
?>
