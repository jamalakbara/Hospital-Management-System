<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicine extends CI_Controller {
	public function index()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Medicine';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        $data["medicine"] = $this->m_medicine->getDataMedicine();
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('medicine/view_medicine');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }
        
        public function addNew()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Medicine';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('medicine/add_medicine');
                        $this->load->view('footer');
                }else{
                        redirect("login");
                }
        }
        
        public function simpan(){
                $config = array(
			array(
				'field' => 'medCategory',
				'label' => 'Category',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'medName',
				'label' => 'Medicine name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        $data["title"] = 'Medicince';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('medicine/add_medicine');
                        $this->load->view('footer');
                } else {
                        $simpan = $this->m_medicine->simpan_medicine();
                        if($simpan){
                                $this->session->set_flashdata('success', true);
                                redirect('medicine');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('medicine');
                        }
                }
        }

        public function delete(){
                $id = $this->uri->segment(3);
                $del = $this->m_medicine->deleteMedicine($id);
                if ($del){
                        $this->session->set_flashdata('success',true);
                        redirect('medicine');
                }else{
                        $this->session->set_flashdata('fail',true);
                        redirect('medicine');
                }
        }

        public function editMedicine(){
                if($this->session->userdata('loggedIn')){
                        $id = $this->uri->segment(3);
                        $data["title"] = 'Medicine';
                        $data["medicine"] = $this->m_medicine->getDataDetailMedicine($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('medicine/edit_medicine');
                        $this->load->view('footer');
                }
        }

        public function edit(){
                $id = $this->uri->segment(3);
                $config = array(
			array(
				'field' => 'medCategory',
				'label' => 'Category',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'medName',
				'label' => 'Medicine name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        
                        $data["title"] = 'Medicine';
                        $data["medicine"] = $this->m_medicine->getDataDetailMedicine($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('medicine/edit_medicine');
                        $this->load->view('footer');
                } else {
                        $update = $this->m_medicine->update_medicine($id);
                        if ($update){
                                $this->session->set_flashdata('success', true);
                                redirect('medicine');
                        }else{
                                $this->session->set_flashdata('success', true);
                                redirect('medicine');
                        }
                }
        }
}
