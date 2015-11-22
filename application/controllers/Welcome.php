<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	// Contoh mengakses halaman:
	// Format: <URL tempat file>/index.php/<nama controller>/<nama fungsi>
	// Contoh: http://localhost:1337/SIL/index.php/welcome/index_home
	
	public function index() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('template/footer');
	}
	public function index_home() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function index_supplier() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('supplier');
		$this->load->view('footer');
	}
	public function index_toBuy() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('toBuy');
		$this->load->view('footer');
	}
	public function index_barang() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('barang');
		$this->load->view('footer');
	}
	public function index_minStok() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('minStok');
		$this->load->view('footer');
	}
	
	// Create
	public function create_new_komponen() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('create_new_komponen');
		$this->load->view('footer');
	}
	public function new_komponen_into_db() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('new_komponen_into_db');
		$this->load->view('footer');
	}
	
	public function create_new_supplier() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('create_new_supplier');
		$this->load->view('footer');
	}
	public function new_supplier_into_db() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('new_supplier_into_db');
		$this->load->view('footer');
	}
	
	public function create_new_histori() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('create_new_histori');
		$this->load->view('footer');
	}
	public function new_histori_into_db() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('new_histori_into_db');
		$this->load->view('footer');
	}
	// Read
	public function read_komponen() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('read_komponen');
		$this->load->view('footer');
	}
	
	public function read_histori() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('read_histori');
		$this->load->view('footer');
	}
	
	public function read_supplier() {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('read_supplier');
		$this->load->view('footer');
	}
	
	// Update
	
	// Delete
}