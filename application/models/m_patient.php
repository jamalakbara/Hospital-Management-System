<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_patient extends CI_Model {
	public function simpan_pasien(){
        $data = array(
            'id_pasien' => $this->input->post('id'),
            'first_name' => $this->input->post('fName'),
            'last_name' => $this->input->post('lName'),
            'gender' => $this->input->post('gender'),
            'blood_group' => $this->input->post('blood'),
            'birth_date' => $this->input->post('birth'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );

        return $this->db->insert('patient', $data);
    }

    public function getIdPasien(){
        $query = $this->db->select_max("id_pasien")->get('patient');
        if ($query->num_rows() == 0){
            return "1";
        }else{
            return (int)$query->row()->id_pasien + 1;
        }
    }

    public function getDataPasien(){
        return $this->db->get('patient')->result_array();
    }

    public function deletePasien($id){
        return $this->db->where('id_pasien', $id)->delete('patient');
    }

    public function getDataDetailPasien($id){
        return $this->db->where('id_pasien',$id)->get('patient')->result_array();
    }

    public function simpan_check(){
        $data = array(
            'id_pasien' => $this->input->post('id_pasien'),
            'medicine_id' => $this->input->post('med'),
            'symptom' => $this->input->post('symp'),
            'diagnosis' => $this->input->post('diag'),
            'checkup_date' => $this->input->post('check')
        );

        return $this->db->insert('checkup',$data);
    }

    public function getDataCheckUp($id){
        return $this->db->select('a.symptom, a.diagnosis, a.checkup_date, b.medicine_name, b.medicine_category, b.medicine_id')->from('checkup a')->join('medicine b', 'a.medicine_id = b.medicine_id')->where('a.id_pasien', $id)->get()->result_array();
    }

    public function update_pasien($id){
        $data = array(
            'first_name' => $this->input->post('fName'),
            'last_name' => $this->input->post('lName'),
            'gender' => $this->input->post('gender'),
            'blood_group' => $this->input->post('blood'),
            'birth_date' => $this->input->post('birth'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );
        return $this->db->where('id_pasien', $id)->update('patient', $data);
    }
}
