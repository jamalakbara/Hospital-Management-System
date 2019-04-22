<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
        $data["title"] = 'Profile';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('profile/edit_profile');
        $this->load->view('footer');
	}
}
