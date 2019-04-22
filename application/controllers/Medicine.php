<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicine extends CI_Controller {
	public function index()
	{
        $data["title"] = 'Medicine';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('medicine/view_medicine');
        $this->load->view('footer');
        }
        
        public function addNew()
	{
        $data["title"] = 'Medicine';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('medicine/add_medicine');
        $this->load->view('footer');
	}
}
