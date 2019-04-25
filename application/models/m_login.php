<?php
class M_login extends CI_Model{
  
 //untuk cek username pass
 public function cek_username_pass($username,$pass){
  $this->db->where('email',$username);
  $this->db->where('password',$pass);
  return $this->db->get('user');
 }
 public function getUser($id){
    return $this->db->where('email',$id)->get('user')->result_array();
 }
}