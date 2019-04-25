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
                        $data["payment"] = $this->m_partner->getDataPaymentActive();
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
                        $simpan = $this->m_partner->simpan_option();
                        if($simpan){
                                $this->session->set_flashdata('success', true);
                                redirect('partner/partnerOption');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('partner/partnerOption');
                        }
                        
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
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('partner/add_payment');
                                $this->load->view('footer');
                        }else{
                                redirect('login');
                        }
                } else {
                        $simpan = $this->m_partner->simpan_payment();
                        if($simpan){
                                $this->session->set_flashdata('success', true);
                                redirect('partner/payment');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('partner/payment');
                        }
                }
        }

        public function allotment(){
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Allotment';
                        $data["allotment"] = $this->m_partner->getDataAllotment();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar', $data);
                        $this->load->view('partner/view_allotment');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function addNewAllot(){
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Allotment';
                        $data["patient"] = $this->m_patient->getDataPasien();
                        $data["partner"] = $this->m_partner->getDataPartnerActive();
                        $data["payment"] = $this->m_partner->getDataPaymentActive();
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('partner/add_allotment');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function simpanAllot(){
                $config = array(
                        array(
                                'field' => 'partner',
                                'label' => 'Partner',
                                'rules' => 'required',
                                'errors' => array(
                                        'required' => '%s cannot be empty'
                                )
                        ),
                        array(
                                'field' => 'patient',
                                'label' => 'Patient',
                                'rules' => 'required',
                                'errors' => array(
                                        'required' => '%s cannot be empty'
                                )
                        ),
                        array(
                                'field' => 'card',
                                'label' => 'Partner card number',
                                'rules' => 'required',
                                'errors' => array(
                                        'required' => '%s cannot be empty'
                                )
                        ),
                        array(
                                'field' => 'date',
                                'label' => 'Allotment date',
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
                                $data["subtitle"] = 'Allotment';
                                $data["patient"] = $this->m_patient->getDataPasien();
                                $data["partner"] = $this->m_partner->getDataPartnerActive();
                                $data["payment"] = $this->m_partner->getDataPaymentActive();
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('partner/add_allotment');
                                $this->load->view('footer');
                        }else{
                                redirect('login');
                        }
                } else {
                        $simpan = $this->m_partner->simpan_allotment();
                        if($simpan){
                                $this->session->set_flashdata('success', true);
                                redirect('partner/allotment');
                        }else{
                                $this->session->set_flashdata('fail', true);
                                redirect('partner/allotment');
                        }
                }
        }

        public function deleteOption(){
                $id = $this->uri->segment(3);
                $delete = $this->m_partner->delete_option($id);
                if($delete){
                        $this->session->set_flashdata('success', true);
                        redirect('partner/partneroption');
                }else{
                        $this->session->set_flashdata('fail', true);
                        redirect('partner/partneroption');
                }
        }

        public function deletePayment(){
                $id = $this->uri->segment(3);
                $delete = $this->m_partner->delete_payment($id);
                if($delete){
                        $this->session->set_flashdata('success', true);
                        redirect('partner/payment');
                }else{
                        $this->session->set_flashdata('fail', true);
                        redirect('partner/payment');
                }
        }

        public function deleteAllotment(){
                $id = $this->uri->segment(3);
                $delete = $this->m_partner->delete_allotment($id);
                if($delete){
                        $this->session->set_flashdata('success', true);
                        redirect('partner/allotment');
                }else{
                        $this->session->set_flashdata('fail', true);
                        redirect('partner/allotment');
                }
        }

        public function editOption(){
                if($this->session->userdata('loggedIn')){
                        $id = $this->uri->segment(3);
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Option';
                        $data["payment"] = $this->m_partner->getDataPaymentActive();
                        $data["option"] = $this->m_partner->getDataOptionById($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('partner/edit_partner');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function updateOption(){
                $id = $this->uri->segment(3);
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
                                $data["payment"] = $this->m_partner->getDataPaymentActive();
                                $data["option"] = $this->m_partner->getDataOptionById($id);
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('partner/edit_partner');
                                $this->load->view('footer');
                        }else{
                                redirect('login');
                        }
                } else {
                        $update = $this->m_partner->update_option($id);
                        if($update){
                                $this->session->set_flashdata('success',true);
                                redirect('partner/partnerOption');
                        }else{
                                $this->session->set_flashdata('fail',true);
                                redirect('partner/partnerOption');
                        }
                }
        }

        public function editPayment(){
                if($this->session->userdata('loggedIn')){
                        $id = $this->uri->segment(3);
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Payment';
                        $data["payment"] = $this->m_partner->getDataPaymentById($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('partner/edit_payment');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function updatePayment(){
                $id = $this->uri->segment(3);
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
                                $data["payment"] = $this->m_partner->getDataPaymentById($id);
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('partner/edit_payment');
                                $this->load->view('footer');
                        }else{
                                redirect('login');
                        }
                } else {
                        $update = $this->m_partner->update_payment($id);
                        if($update){
                                $this->session->set_flashdata('success',true);
                                redirect('partner/payment');
                        }else{
                                $this->session->set_flashdata('fail',true);
                                redirect('partner/payment');
                        }
                        
                }
        }

        public function editAllotment(){
                if($this->session->userdata('loggedIn')){
                        $id = $this->uri->segment(3);
                        $data["title"] = 'Partner';
                        $data["subtitle"] = 'Allotment';
                        $data["patient"] = $this->m_patient->getDataPasien();
                        $data["partner"] = $this->m_partner->getDataPartnerActive();
                        $data["payment"] = $this->m_partner->getDataPaymentActive();
                        $data["allotment"] = $this->m_partner->getDataAllotmentById($id);
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('partner/edit_allotment');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
        }

        public function updateAllot(){
                $id = $this->uri->segment(3);
                $config = array(
                        array(
                                'field' => 'partner',
                                'label' => 'Partner',
                                'rules' => 'required',
                                'errors' => array(
                                        'required' => '%s cannot be empty'
                                )
                        ),
                        array(
                                'field' => 'patient',
                                'label' => 'Patient',
                                'rules' => 'required',
                                'errors' => array(
                                        'required' => '%s cannot be empty'
                                )
                        ),
                        array(
                                'field' => 'card',
                                'label' => 'Partner card number',
                                'rules' => 'required',
                                'errors' => array(
                                        'required' => '%s cannot be empty'
                                )
                        ),
                        array(
                                'field' => 'date',
                                'label' => 'Allotment date',
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
                                $data["subtitle"] = 'Allotment';
                                $data["patient"] = $this->m_patient->getDataPasien();
                                $data["partner"] = $this->m_partner->getDataPartnerActive();
                                $data["payment"] = $this->m_partner->getDataPaymentActive();
                                $data["allotment"] = $this->m_partner->getDataAllotmentById($id);
                                $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                                $this->load->view('navigation', $data);
                                $this->load->view('side_bar');
                                $this->load->view('partner/edit_allotment');
                                $this->load->view('footer');
                        }else{
                                redirect('login');
                        }
                } else {
                        $update = $this->m_partner->update_allotment($id);
                        if($update){
                                $this->session->set_flashdata('success',true);
                                redirect('partner/allotment');
                        }else{
                                $this->session->set_flashdata('fail',true);
                                redirect('partner/allotment');
                        }
                }
        }
}
