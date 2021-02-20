<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Orders extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('OrderService');
		$this->load->model('OrderItemService');
	}

	public function index()
	{
		$paginationConfig = array(
			'base_url' => site_url('ProductController/index/'),
			'total_rows' => $this->OrderService->getOrderCount(),
			'per_page' => 2
		);
		$this->pagination->initialize($paginationConfig);
		$data['orders'] = $this->OrderService->getOrderRange(2, $this->uri->segment(3));

		$this->getMasterPage("OrderListView", "Orders", "Order", $data);
	}

	public function view($orderId)
	{
		$order = $this->OrderService->getOrderById($orderId);
		$orderItems = $this->OrderItemService->getOrderItemsByOrder($orderId);
		$data = array(
			'order' => $order,
			'orderItems' => $orderItems
		);
		$this->getMasterPage("OrderView", "Order:" . $order->Id, "Order:" . $order->Id, $data);
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
