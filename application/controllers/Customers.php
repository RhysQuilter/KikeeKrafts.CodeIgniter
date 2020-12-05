<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{

    public function index()
    {
        $customer_model = new $Customer_model();
        $data["Customers"] = $customer_model->findAll();

		$this->load->view('welcome_message', $data);

        echo 'Hello Customer World!';
    }
}
        
    /* End of file  Customer.php */
