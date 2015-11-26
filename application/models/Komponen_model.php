<?php
class Komponen_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function getKomponen()
	{
		$query = $this->db->get('komponen');
		return $query->result_array();
	}
}