<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CustomerModel'); 
    }
    public function index()
    {
        $data["customers"] = $this->CustomerModel->getCustomers();
        $data["heading"] = "Customers";
        $data["pageTitle"] = "Customers Page";

		$this->load->view('CustomersView', $data);
    }
}