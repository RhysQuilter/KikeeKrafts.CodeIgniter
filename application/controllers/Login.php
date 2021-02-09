<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->getMasterPage("LoginView", "Login", "Login");
	}
	public function manage()
	{
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->model("CustomerService");
		$this->load->model("schema/KilkeeKraftsSchema");
		$this->load->model("schema/CustomerSchema");


		$email = $this->input->post($this->CustomerSchema->Email);
		$password = $this->input->post($this->CustomerSchema->Password);

		$userAccount = $this->CustomerService->getCustomerByCredentials($email, $password);

		//var_dump($userAccount);
		if ($userAccount != null) {
			$this->session->set_userdata("UserAccountId", $userAccount->Id);
			$this->session->set_userdata("Username", $userAccount->Email);
			//var_dump($this->session->userdata);
			//var_dump(isset($this->session->userdata["UserAccountId"]));
			//var_dump(($this->session->userdata["UserAccountId"]));
			redirect(site_url("customers/"));
		} else {
			$vars = array(
				"error" => "Incorrect login details entered",
				"username" => $email
			);
			$this->getMasterPage("LoginView", "Login", "Login", $vars);
		}
	}
	private function getMasterPage($pageName, $pageTitle, $mainHeading, $pageVars = null)
	{
		$vars = array(
			'pageTitle' => $pageTitle,
			'mainContent' => $this->load->view($pageName, $pageVars, true),
			'mainHeading' => $mainHeading,
			'loggedIn' => isset($this->session->userdata["UserAccountId"])
		);


		$this->load->view("index", $vars);
	}
}
