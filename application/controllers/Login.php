<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Login extends CI_Controller
{  
	public function index()
	{
		$this->load->view("LoginView");
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

		if ($userAccount != null) {
			$this->session->set_userdata("UserAccountId", $userAccount->Id);
			redirect(base_url() . "index.php/customers/");
		} else {
			$vars = array(
				"error" => "Incorrect login details entered",
				"username" => $email
			);
			var_dump(
				hash("ripemd160", "password")
			);
			$this->load->view("LoginView", $vars);
		}
	}
}
