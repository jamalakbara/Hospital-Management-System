<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_medicine extends CI_Model {
	public function simpan_medicine(){
        $data = array(
            'medicine_name' => $this->input->post('medName'),
            'medicine_category' => $this->input->post('medCategory'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->insert('medicine', $data);
    }


    public function getDataMedicine(){
        return $this->db->get('medicine')->result_array();
    }

    public function deleteMedicine($id){
        return $this->db->where('medicine_id', $id)->delete('medicine');
    }

    public function getDataDetailMedicine($id){
        return $this->db->where('medicine_id',$id)->get('medicine')->result_array();
    }

    public function update_medicine($id){
        $data = array(
            'medicine_name' => $this->input->post('medName'),
            'medicine_category' => $this->input->post('medCategory'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->where('medicine_id',$id)->update('medicine', $data);
    }
}
