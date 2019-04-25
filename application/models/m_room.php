<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_room extends CI_Model {
	public function simpan_room(){
        $data = array(
            'room_no' => $this->input->post('roomNo'),
            'room_category' => $this->input->post('roomCategory'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->insert('room', $data);
    }


    public function getDataRoom(){
        return $this->db->get('room')->result_array();
    }

    public function getDataDetailRoom($id){
        return $this->db->where('room_no',$id)->get('room')->result_array();
    }

    public function deleteRoom($id){
        return $this->db->where('room_no', $id)->delete('room');
    }

    public function update_room($id){
        $data = array(
            'room_category' => $this->input->post('roomCategory'),
            'status' => $this->input->post('gridRadios')
        );
        return $this->db->where('room_no', $id)->update('room', $data);
    }
}
