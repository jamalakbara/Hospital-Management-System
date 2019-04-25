<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_partner extends CI_Model {
	public function simpan_option(){
        $data = array(
            'partner_company' => $this->input->post('partCom'),
            'id_payment' => $this->input->post('pay'),
            'description' => $this->input->post('desc'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->insert('partner', $data);
    }


    public function getDataOption(){
        return $this->db->select('a.partner_id, a.partner_company, a.status, b.payment_category')->from('partner a')->join('payment b', 'a.id_payment = b.id_payment')->get()->result_array();
    }

    public function getDataOptionById($id){
        return $this->db->select('a.partner_id, a.partner_company, a.status, a.description, b.id_payment, b.payment_category')->from('partner a')->join('payment b', 'a.id_payment = b.id_payment')->where('a.partner_id', $id)->get()->result_array();
    }

    public function getDataPartnerActive(){
        return $this->db->where('status', 'active')->get('partner')->result_array();
    }

    public function getDataPayment(){
        return $this->db->get('payment')->result_array();
    }

    public function getDataPaymentById($id){
        return $this->db->where('id_payment', $id)->get('payment')->result_array();
    }

    public function getDataPaymentActive(){
        return $this->db->where('status','active')->get('payment')->result_array();
    }

    public function simpan_payment(){
        $data = array(
            'payment_category' => $this->input->post('payment'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->insert('payment', $data);
    }

    public function simpan_allotment(){
        $data = array(
            'id_pasien' => $this->input->post('patient'),
            'partner_id' => $this->input->post('partner'),
            'cardnum' => $this->input->post('card'),
            'allot_date' => $this->input->post('date')
        );

        return $this->db->insert('allotment', $data);
    }

    public function getDataAllotment() {
        return $this->db->select('a.first_name, a.last_name, c.partner_company,b.allotment_id, b.cardnum, d.payment_category, b.allot_date')->from('patient a')->join('allotment b', 'a.id_pasien = b.id_pasien')->join('partner c', 'b.partner_id = c.partner_id')->join('payment d', 'c.id_payment = d.id_payment')->get()->result_array();
    }

    public function getDataAllotmentById($id) {
        return $this->db->select('a.id_pasien, a.first_name, a.last_name, c.partner_id, c.partner_company, b.allotment_id, b.cardnum, d.payment_category, b.allot_date')->from('patient a')->join('allotment b', 'a.id_pasien = b.id_pasien')->join('partner c', 'b.partner_id = c.partner_id')->join('payment d', 'c.id_payment = d.id_payment')->where('b.allotment_id', $id)->get()->result_array();
    }

    public function delete_option($id){
        return $this->db->where('partner_id', $id)->delete('partner');
    }

    public function delete_payment($id){
        return $this->db->where('id_payment', $id)->delete('payment');
    }

    public function delete_allotment($id){
        return $this->db->where('allotment_id', $id)->delete('allotment');
    }

    public function update_option($id){
        $data = array(
            'partner_company' => $this->input->post('partCom'),
            'id_payment' => $this->input->post('pay'),
            'description' => $this->input->post('desc'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->where('partner_id',$id)->update('partner', $data);
    }

    public function update_payment($id){
        $data = array(
            'payment_category' => $this->input->post('payment'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->where('id_payment', $id)->update('payment', $data);
    }

    public function update_allotment($id){
        $data = array(
            'id_pasien' => $this->input->post('patient'),
            'partner_id' => $this->input->post('partner'),
            'cardnum' => $this->input->post('card'),
            'allot_date' => $this->input->post('date')
        );

        return $this->db->where('allotment_id', $id)->update('allotment', $data);
    }
}
