<?php

class Komponen_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function getKomponen()
	{
		$this->db->select('*');
		$this->db->from('komponen');
		// $this->db->join('supplier','supplier.id_supplier = komponen.supplier');
		$this->db->order_by('nama_komponen');

		$query = $this->db->get();
		return $query->result_array();
	}
}