<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant extends CI_Controller {
	public function index()
	{
        $data["title"] = 'Accountant';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('accountant/view_accountant');
        $this->load->view('footer');
	}
}
