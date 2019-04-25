<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {
	public function partnerOption()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Option';
                        $data["option"] = $this->m_partner->getDataOption();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar', $data);
                        $this->load->view('partner/view_partner');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }
        
        public function addNew()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Option';
                        $data["payment"] = $this->m_partner->getDataPayment();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('partner/add_partner');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function simpan(){
                $config = array(
			array(
				'field' => 'partCom',
				'label' => 'Partner company',
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
                                $data["title"] = 'Partner';
                                $data["subtitle"] = 'Option';
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('partner/add_partner');
                                $this->load->view('footer');
                        }else{
                                redirect('login');
                        }
                } else {
                        $this->m_partner->simpan_option();
                        redirect('partner/partnerOption');
                }
        }

        public function payment()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Payment';
                        $data["payment"] = $this->m_partner->getDataPayment();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar', $data);
                        $this->load->view('partner/view_payment');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function addNewPayment(){
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Payment';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('partner/add_payment');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function simpanPayment(){
                $config = array(
			array(
				'field' => 'payment',
				'label' => 'Payment category',
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
                                $data["title"] = 'Partner';
                                $data["subtitle"] = 'Payment';
                                $data["payment"] = $this->m_partner->getDataPayment();
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar', $data);
                                $this->load->view('partner/view_payment');
                                $this->load->view('footer');
                        }else{
                                redirect('login');
                        }
                } else {
                        $this->m_partner->simpan_payment();
                        redirect('partner/payment');
                }
        }
}
