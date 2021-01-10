<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class ProductController extends CI_Controller {
    
    
    public function __construct() {
		parent::__construct();
		$this->load->model('ProductService');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
    }
    
    public function index() {
		//load the index page
		$this->load->view('index');
	}
        
        
     public function listproducts() { //config options for pagination
		$paginationConfig = array(
			'base_url' => site_url('ProductController/listproduct/'),
			'total_rows' => $this->ProductService->record_count(),
			'per_page' => 2);
		$this->pagination->initialize($paginationConfig);
		$data['product_info'] = $this->ProductService->get_all_product(2, $this->uri->segment(3));
		$this->load->view('productListView', $data);
	}

    public function editproduct($Id) {
		$data['edit_data'] = $this->ProductServices->drilldown($Id);
		$this->load->view('updateproductView', $data);
	}
        
        public function viewproduct($Id) {
		$data = array('product' => $this->ProductService->getProductByCode($Id));
		$this->load->view('productView', $data);
	}
        
        public function deleteproduct($Id) {
		$deletedRows = $this->ProductService->deleteProductById($Id);
		if ($deletedRows > 0)
			$data['message'] = "$deletedRows product has been deleted";
		else
			$data['message'] = "There was an error deleting the product with an ID of $Id";
		$this->load->view('displayMessageView', $data);
	}
}
