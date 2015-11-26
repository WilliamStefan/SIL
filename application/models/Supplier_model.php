<?php
/**
 * Created by PhpStorm.
 * User: adwisatya
 * Date: 9/21/2015
 * Time: 10:56 AM
 */

class Supplier_model extends  CI_Model{
    public function __construct(){
        // parent::__construct();
        parent::Model();
        $this->load->helper('file');
        $this->load->dbforge();
        $this->load->database();
    }
}