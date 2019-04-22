<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
        $data["title"] = 'Dashboard';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('dashboard/dashboard');
        $this->load->view('footer');
	}
}
