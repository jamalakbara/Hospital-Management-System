<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
                if($this->session->userdata('loggedIn')){
                        $data["title"] = 'Dashboard';
                        $data["user"] = $this->m_login->getUser($this->session->userdata('email'));
                        $data["jum_pasien"] = $this->m_dashboard->getJumlahPasien();
                        $data["jum_room"] = $this->m_dashboard->getJumlahRoom();
                        $data["jum_medicine"] = $this->m_dashboard->getJumlahMedicine();
                
                        $this->load->view('navigation', $data);
                        $this->load->view('side_bar');
                        $this->load->view('dashboard/dashboard');
                        $this->load->view('footer');
                }else{
                        redirect('login');
                }
	}
}
