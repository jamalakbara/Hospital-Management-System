<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	public function index()
	{
        $data["title"] = 'Patient';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('patient/view_patient');
        $this->load->view('footer');
        }
        
        public function addNew()
	{
        $data["title"] = 'Patient';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('patient/add_patient');
        $this->load->view('footer');
	}
}
