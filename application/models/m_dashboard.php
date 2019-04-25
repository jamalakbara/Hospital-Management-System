<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
	public function getJumlahPasien(){
        return $this->db->select('COUNT(id_pasien) AS jumlah_pasien')->get('patient')->row()->jumlah_pasien;
    }

    public function getJumlahRoom(){
        return $this->db->select('COUNT(room_no) AS jumlah_room')->get('room')->row()->jumlah_room;
    }

    public function getJumlahMedicine(){
        return $this->db->select('COUNT(medicine_id) AS jumlah_medicine')->get('medicine')->row()->jumlah_medicine;
    }
}
