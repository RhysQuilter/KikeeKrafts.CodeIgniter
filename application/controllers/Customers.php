<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('CustomerService');
    }
    public function index()
    {
        $data = array(
            "customers" => $this->CustomerService->getCustomers(),
            "heading" => "Customers",
            "pageTitle" => "Customers Page"
        );

        $this->load->view('CustomersView', $data);
    }
    public function view($customerId = NULL)
    {
        $data['customer'] = $this->CustomerService->getCustomerById($customerId);
        $data["heading"] = "Customer";
        $data["pageTitle"] = "Customer Page";

        $this->load->view('CustomerView', $data);
    }
    //WIP
    public function register()
    {
        $data["heading"] = "Customers";
        $data["pageTitle"] = "Customers Page";

        $this->load->view('CustomerRegisterView', $data);
    }
}
