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

        $masterPageData = array(
            'pageTitle' => "Customers",
            'mainContent' => $this->load->view("CustomersView", $data, true),
            'mainHeading' => "Customers",
			'loggedIn' => isset($this->session->userdata["UserAccountId"])
        );


        $this->load->view("index", $masterPageData);
    }
    public function view($customerId = NULL)
    {
        $data = array(
            "customer" => $this->CustomerService->getCustomerById($customerId),
            "heading" => "Customer",
            "pageTitle" => "Customer Page"
        );

        $masterPageData = array(
            'pageTitle' => "Customers",
            'mainContent' => $this->load->view("CustomerView", $data, true),
            'mainHeading' => "Customers"
        );


        $this->load->view("index", $masterPageData);
    }
    public function edit($customerId = NULL)
    {
        $data = array(
            "customer" => $this->CustomerService->getCustomerById($customerId),
            "heading" => "Customer",
            "pageTitle" => "Customer Page"
        );

        $this->load->view("CustomerEditView", $data);
    }
    public function update($customerId = NULL)
    {
        //validate forms post data


        $customer = array(
            "Id" => $customerId,
            "FirstName" => $customerId //$this->post["firstname"];
        );

        $operationSuccessful = $this->CustomerService->updateCustomer($customer);

        if ($operationSuccessful == true) {
            $message = "Customer Saved";
            $view = "CustomerView";
        } else {
            $message = "Error";
            $view = "CustomerEditView";
        }
        $data = array(
            "customer" => $this->CustomerService->getCustomerById($customerId),
            "heading" => "Customer",
            "pageTitle" => "Customer Page",
            "message" => $message
        );
        $this->load->view($view, $data);
    }
    public function register()
    {
        $data["heading"] = "Customers";
        $data["pageTitle"] = "Customers Page";

        $this->load->view('CustomerRegisterView', $data);
    }
}
