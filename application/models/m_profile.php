<?php
class M_profile extends CI_Model{
    public function edit_profile($email){
        $data = array(
            'first_name' => $this->input->post('fName'),
            'last_name' => $this->input->post('lName'),
            'password' => $this->input->post('pass'),
        );
        return $this->db->where('email', $email)->update('user', $data);
    }
}