<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	public function index()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Patient';
                        $data["pasien"] = $this->m_patient->getDataPasien();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
        
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/view_patient');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }
        
        public function addNew()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Patient';
                        $data["id_pasien"] = $this->m_patient->getIdPasien();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
        
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/add_patient');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }
        
        public function simpan(){
                $config = array(
			array(
				'field' => 'fName',
				'label' => 'First Name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'lName',
				'label' => 'Last Name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        ),
                        array(
				'field' => 'gender',
				'label' => 'Gender',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be unselected'
				)
                        ),
                        array(
				'field' => 'birth',
				'label' => 'Birth Date',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        ),
                        array(
				'field' => 'phone',
				'label' => 'Phone',
				'rules' => 'required|numeric',
				'errors' => array(
                                        'required' => '%s cannot be empty',
                                        'numeric' => '%s must number'
				)
                        ),
                        array(
				'field' => 'address',
				'label' => 'Address',
				'rules' => 'required',
				'errors' => array(
                                        'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        $data["title"] = 'Patient';
                        $data["id_pasien"] = $this->m_patient->getIdPasien();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));

                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/add_patient');
                        $this->load->view('footer');
                } else {
                        $simpan = $this->m_patient->simpan_pasien();
                        if($simpan){
                                $this->session->set_flashdata('success', true);
                                redirect('patient');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('patient');
                        }
                }
        }

        public function delete(){
                $id = $this->uri->segment(3);
                $del = $this->m_patient->deletePasien($id);
                if ($del){
                        $this->session->set_flashdata('success',true);
                        redirect('patient');
                }else{
                        $this->session->set_flashdata('fail',true);
                        redirect('patient');
                }
        }

        public function detail(){
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Patient';
                        $id = $this->uri->segment(3);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        // $data["id_pasien"] = $id;
                        $data["checkup"] = $this->m_patient->getDataCheckUp($id);
                        $data["pasien"] = $this->m_patient->getDataDetailPasien($id);
                        
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/detail_patient');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function addCheckup(){
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Patient';
                        $data["id_pasien"] = $this->uri->segment(3);
                        $data["obat"] = $this->m_medicine->getDataMedicine();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        // var_dump($data["id_pasien"]);
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/add_checkup');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function simpanCheck(){
                $id = $this->uri->segment(3);
                $config = array(
			array(
				'field' => 'symp',
				'label' => 'Symptoms',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'diag',
				'label' => 'Diagnosis',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        $data["title"] = 'Patient';
                        $data["id_pasien"] = $id;
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));

                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/add_checkup');
                        $this->load->view('footer');
                } else {
                        $simpan = $this->m_patient->simpan_check();
                        if($simpan){
                                $this->session->set_flashdata('success', true);
                                redirect('patient/detail/'.$id);
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('patient/detail/'.$id);
                        }
                }
        }

        public function editProfile(){
                if($this->session->userdata('loggedIn')){
                        $id = $this->uri->segment(3);
                        $data["title"] = 'Patient';
                        // $data["id_pasien"] = $this->m_patient->getIdPasien();
                        $data["patient"] = $this->m_patient->getDataDetailPasien($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
        
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/edit_patient');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function edit(){
                $id = $this->uri->segment(3);
                $config = array(
			array(
				'field' => 'fName',
				'label' => 'First Name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
			),
			array(
				'field' => 'lName',
				'label' => 'Last Name',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        ),
                        array(
				'field' => 'gender',
				'label' => 'Gender',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be unselected'
				)
                        ),
                        array(
				'field' => 'birth',
				'label' => 'Birth Date',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s cannot be empty'
				)
                        ),
                        array(
				'field' => 'phone',
				'label' => 'Phone',
				'rules' => 'required|numeric',
				'errors' => array(
                                        'required' => '%s cannot be empty',
                                        'numeric' => '%s must number'
				)
                        ),
                        array(
				'field' => 'address',
				'label' => 'Address',
				'rules' => 'required',
				'errors' => array(
                                        'required' => '%s cannot be empty'
				)
                        )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE) {
                        $data["title"] = 'Patient';
                        // $data["id_pasien"] = $this->m_patient->getIdPasien();
                        $data["patient"] = $this->m_patient->getDataDetailPasien($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
        
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('patient/edit_patient');
                        $this->load->view('footer');
                } else {
                        $update = $this->m_patient->update_pasien($id);
                        if ($update){
                                $this->session->set_flashdata('success', true);
                                redirect('patient');
                        }else{
                                $this->session->set_flashdata('success', true);
                                redirect('patient');
                        }
                }
        }
}
