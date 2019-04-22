<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {
	public function index()
	{
        $data["title"] = 'Room';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('room/view_room');
        $this->load->view('footer');
        }
        
        public function addNew()
	{
        $data["title"] = 'Room';

        $this->load->view('navigation');
        $this->load->view('side_bar', $data);
        $this->load->view('room/add_room');
        $this->load->view('footer');
	}
}
