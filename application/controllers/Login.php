<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
        $this->load->view("login");
    }
        
    public function cek() {
        $config = array(
             array(
               'field' => 'email',
               'label' => 'Email',
               'rules' => 'required',
               'errors'=> array(
                   'required'      => '%s Cannot be empty'
                  )
             ),
             array(
               'field' => 'pass',
               'label' => 'pass',
               'rules' => 'required',
               'errors'=> array(
                   'required' => '%s Cannot be empty'
                   //'matches'  => '%s Salah'
                  )
             )
           );
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
        $this->form_validation->set_rules($config);
     
        if ($this->form_validation->run() == FALSE) {
         $this->load->view('login');
        } else {
         $query = $this->m_login->cek_username_pass($this->input->post('email'), ($this->input->post('pass')));
         if ($query->num_rows() <> 0) {
          foreach ($query->result_array() as $data) {
           $sess_data['email']   = $data['email'];
           $sess_data['pass']   = $data['password'];
           $sess_data['role']      = $data['role'];
           $sess_data['loggedIn']      = true;
           $this->session->set_userdata($sess_data);
          }
          $role = $this->session->userdata('role');
          if ($role == "admin") {
           redirect('home');
          }
          else {
           redirect('home');
          }
         }else{
           redirect('login');
         }
        }
       }
}
