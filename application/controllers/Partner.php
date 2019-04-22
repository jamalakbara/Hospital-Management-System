<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {
	public function index()
	{
        $data["title"] = 'Partner';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('partner/view_partner');
        $this->load->view('footer');
	}
}
