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

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('welcome_message');
		$this->load->view('template/footer');
	}
	public function index_transaction()
	{
		//[localhost/IF4031/][index.php/][welcome]/[index_transaksi]
		//[base_path][index.php][controller_name][function_name]
		$this->load->helper('url');
		$this->load->view('template/header.php');
		$this->load->view('welcome_message2');
		$this->load->view('template/footer.php');
	}
	public function index_home()
	{
		//[localhost/IF4031/][index.php/][welcome]/[index_home]
		//[base_path][index.php][controller_name][function_name]
		$this->load->helper('url');
		$this->load->view('template/header.php');
		$this->load->view('home');
		$this->load->view('template/footer.php');
	}
	public function index_supplier()
	{
		//[localhost/IF4031/][index.php/][welcome]/[index_home]
		//[base_path][index.php][controller_name][function_name]
		$this->load->helper('url');
		$this->load->view('template/header.php');
		$this->load->view('supplier');
		$this->load->view('template/footer.php');
	}
	public function index_toBuy()
	{
		//[localhost/IF4031/][index.php/][welcome]/[index_home]
		//[base_path][index.php][controller_name][function_name]
		$this->load->helper('url');
		$this->load->view('template/header.php');
		$this->load->view('toBuy');
		$this->load->view('template/footer.php');
	}
	public function index_barang()
	{
		//[localhost/IF4031/][index.php/][welcome]/[index_home]
		//[base_path][index.php][controller_name][function_name]
		$this->load->helper('url');
		$this->load->view('template/header.php');
		$this->load->view('barang');
		$this->load->view('template/footer.php');
	}
	public function index_minStok()
	{
		//[localhost/IF4031/][index.php/][welcome]/[index_home]
		//[base_path][index.php][controller_name][function_name]
		//$data = new Dss();
		// $data = array('title'=>'lalala');
		$this->load->helper('url');
		$this->load->view('template/header.php');
		$this->load->view('minStok');
		$this->load->view('template/footer.php');
	}
}
