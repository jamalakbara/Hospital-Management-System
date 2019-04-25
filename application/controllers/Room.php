<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {
	public function index()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Room';
                        $data["room"] = $this->m_room->getDataRoom();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation',$data);
                        $this->load->view('side_bar');
                        $this->load->view('room/view_room');
                        $this->load->view('footer');

                }else{
                        redirect('login');
                }
        }
        
        public function addNew()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Room';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('room/add_room');
                        $this->load->view('footer');
                }
        }
        
        public function simpan(){
                $config = array(
			array(
				'field' => 'roomCategory',
				'label' => 'Category',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'roomNo',
				'label' => 'Room No',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        $data["title"] = 'Room';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));

                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('room/add_room');
                        $this->load->view('footer');
                } else {
                        $this->m_room->simpan_room();
                        redirect('room');
                }
        }

        public function delete(){
                $id = $this->uri->segment(3);
                $del = $this->m_room->deleteRoom($id);
                if ($del){
                        $this->session->set_flashdata('success',true);
                        redirect('room');
                }else{
                        $this->session->set_flashdata('fail',true);
                        redirect('room');
                }
        }

        public function editRoom(){
                if($this->session->userdata('loggedIn')){
                        $id = $this->uri->segment(3);
                        $data["title"] = 'Room';
                        $data["room"] = $this->m_room->getDataDetailRoom($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('room/edit_room');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function edit(){
                $id = $this->uri->segment(3);
                $config = array(
			array(
				'field' => 'roomCategory',
				'label' => 'Category',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'roomNo',
				'label' => 'Room No',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        $data["title"] = 'Room';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        $data["room"] = $this->m_room->getDataDetailRoom($id);

                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('room/edit_room');
                        $this->load->view('footer');
                } else {
                        $update = $this->m_room->update_room($id);
                        if ($update){
                                $this->session->set_flashdata('success', true);
                                redirect('room');
                        }else{
                                $this->session->set_flashdata('success', true);
                                redirect('room');
                        }
                }
        }
}
