<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Home';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('home');
                        $this->load->view('footer');

                }else{
                        redirect('login');
                }
	}
}
