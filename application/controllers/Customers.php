<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('CustomerModel');
    }
    public function index()
    {
        $data["customers"] = $this->CustomerModel->getCustomers();
        $data["heading"] = "Customers";
        $data["pageTitle"] = "Customers Page";

        $this->load->view('CustomersView', $data);
    }
    public function register()
    {
        $data["heading"] = "Customers";
        $data["pageTitle"] = "Customers Page";

        $this->load->view('CustomerRegisterView', $data);
    }
    public function view($id = NULL)
    {
        $data['customer'] = $this->CustomerModel->getCustomer($id);
        $data["heading"] = "Customer";
        $data["pageTitle"] = "Customer Page";

        $this->load->view('CustomerView', $data);
    }
}
