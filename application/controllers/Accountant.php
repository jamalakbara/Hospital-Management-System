<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant extends CI_Controller {
	public function index()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Accountant';
                        $data["accountant"] = $this->m_accountant->getDataAccountant();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('accountant/view_accountant');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }
        
        public function addNew()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Accountant';
                        $data["id_acc"] = $this->m_accountant->getIdAccountant();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('accountant/add_accountant');
                        $this->load->view('footer');
                }else{
                        redirect("login");
                }
        }

        public function simpan(){
                $config = array(
			array(
				'field' => 'accName',
				'label' => 'Accountant name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        if($this->session->userdata('loggedIn')){
                                $data["title"] = 'Accountant';
                                $data["id_acc"] = $this->m_accountant->getIdAccountant();
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('accountant/add_accountant');
                                $this->load->view('footer');
                        }else{
                                redirect("login");
                        }
                } else {
                        $simpan = $this->m_accountant->simpan_accountant();
                        if($simpan){
                                $this->session->set_flashdata('success', true);
                                redirect('accountant');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('accountant');
                        }
                }
        }

        public function delete(){
                $id = $this->uri->segment(3);
                $delete = $this->m_accountant->delete_acc($id);
                if($delete){
                        $this->session->set_flashdata('success', true);
                        redirect('accountant');
                }else{
                        $this->session->set_flashdata('fail', true);
                        redirect('accountant');
                }
        }

        public function editAccountant(){
                if($this->session->userdata('loggedIn')){
                        $id = $this->uri->segment(3);
                        $data["title"] = 'Accountant';
                        $data["accountant"] = $this->m_accountant->getDataAccountantById($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('accountant/edit_accountant');
                        $this->load->view('footer');
                }else{
                        redirect("login");
                }
        }

        public function edit(){
                $id = $this->uri->segment(3);
                $config = array(
			array(
				'field' => 'accName',
				'label' => 'Accountant name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        if($this->session->userdata('loggedIn')){
                                $data["title"] = 'Accountant';
                                $data["accountant"] = $this->m_accountant->getDataAccountantById($id);
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('accountant/edit_accountant');
                                $this->load->view('footer');
                        }else{
                                redirect("login");
                        }
                } else {
                        $update = $this->m_accountant->edit_acc($id);
                        if($update){
                                $this->session->set_flashdata('success', true);
                                redirect('accountant');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('accountant');
                        }
                }
        }
}
