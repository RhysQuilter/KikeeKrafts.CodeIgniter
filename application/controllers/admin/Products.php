<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Products extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductService');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');

	}

	public function index()
	{
		$paginationConfig = array(
			'base_url' => site_url('admin/Products/index/'),
			'total_rows' => $this->ProductService->getProductCount(),
			'per_page' => 2
		);
		$this->pagination->initialize($paginationConfig);
		$data['products'] = $this->ProductService->getProductRange(5, $this->uri->segment(3));

		$this->getMasterPage("admin/ProductListView", "Products", "Products", $data);
	}

	public function editproduct($Id)
	{
		$product = $this->ProductService->getProductById($Id);
		$data = array('product' => $product);
		$this->getMasterPage("admin/ProductUpdateView", "Product:". $product->Description, "Product:" . $product->Description, $data);
	}

	public function viewproduct($Id)
	{
		$product = $this->ProductService->getProductById($Id);
		$data = array('product' => $product);
		$this->getMasterPage("admin/ProductView", "Product:". $product->Description, "Product:" . $product->Description, $data);
	}

	public function deleteproduct($Id)
	{
		$deletedRows = $this->ProductService->deleteProductById($Id);
		if ($deletedRows > 0)
			$data['message'] = "$deletedRows product has been deleted";
		else
			$data['message'] = "There was an error deleting the product with an ID of $Id";
		$this->load->view('displayMessageView', $data);
	}

	private function getMasterPage($pageName, $pageTitle, $mainHeading, $pageVars = null)
	{
		$vars = array(
			'pageTitle' => $pageTitle,
			'mainContent' => $this->load->view($pageName, $pageVars, true),
			'mainHeading' => $mainHeading,
			"username" => $this->getSessionUsername(),
			'loggedIn' => $this->isLoggedIn()
		);


		$this->load->view("index", $vars);
	}
	private function getSessionUsername()
	{
		if (isset($this->session->userdata["Username"]))
			return $this->session->userdata["Username"];
		else return "";
	}
	private function isLoggedIn()
	{
		if (isset($this->session->userdata["UserAccountId"]))
			return true;
		else return false;
	}
}
