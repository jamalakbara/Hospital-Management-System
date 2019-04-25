<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Profile';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('profile/edit_profile');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }
        
        public function edit(){
                $config = array(
			array(
				'field' => 'fName',
				'label' => 'First name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'lName',
				'label' => 'Last name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        ),
                        array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        ),
                        array(
				'field' => 'pass',
				'label' => 'Password',
				'rules' => 'required|max_length[10]',
				'errors' => array(
                                        'required' => '%s cannot be empty',
                                        'max_length' => '%s maksimal 10 karakter'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        $data["title"] = 'Profile';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('profile/edit_profile');
                        $this->load->view('footer');
                } else {
                        $query = $this->m_profile->edit_profile($this->session->userdata('email'));
                        if($query){
                                $this->session->set_flashdata('success', true);
                                redirect('profile');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('profile');
                        }
                }
        }
}
