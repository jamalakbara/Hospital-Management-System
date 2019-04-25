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
        return $this->db->select('a.partner_company, a.status, b.payment_category')->from('partner a')->join('payment b', 'a.id_payment = b.id_payment')->get()->result_array();
    }

    public function getDataPayment(){
        return $this->db->get('payment')->result_array();
    }

    public function simpan_payment(){
        $data = array(
            'payment_category' => $this->input->post('payment'),
            'status' => $this->input->post('gridRadios')
        );

        return $this->db->insert('payment', $data);
    }
}
