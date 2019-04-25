<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_accountant extends CI_Model {
    public function getDataAccountant(){
        return $this->db->get('accountant')->result_array();
    }

    public function getDataAccountantById($id){
        return $this->db->where('acc_id', $id)->get('accountant')->result_array();
    }

    public function getIdAccountant(){
        return (int)$this->db->select('COUNT(acc_id) as acc_id')->get('accountant')->row()->acc_id + 1;
    }

    public function simpan_accountant(){
        $data = array(
            'acc_id' => $this->input->post('id'),
            'acc_name' => $this->input->post('accName'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->insert('accountant', $data);
    }

    public function delete_acc($id){
        return $this->db->where('acc_id', $id)->delete('accountant');
    }

    public function edit_acc($id){
        $data = array(
            'acc_name' => $this->input->post('accName'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->where('acc_id', $id)->update('accountant', $data);
    }
}
