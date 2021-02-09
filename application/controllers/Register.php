<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->getMasterPage("RegisterView", "Register", "Register");
	}
	public function handleRegistration()
	{
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->model("CustomerService");
		$this->load->model("schema/KilkeeKraftsSchema");
		$this->load->model("schema/CustomerSchema");


		$password = $this->input->post("Password");
		$confirmPassword = $this->input->post("ConfirmPassword");

		if ($password != $confirmPassword) {
			$vars = array(
				"error" => "Passwords do not match"
			);
			$this->getMasterPage("RegisterView", "Register", "Register", $vars);
			return ;
			//TODO goto register with errormsg
		}

		$customerValuesArray = array(
			"Email" => $this->input->post("Email"),
			"FirstName" => $this->input->post("FirstName"),
			"LastName" => $this->input->post("LastName"),
			"Password" => $this->input->post("Password"),
			"PhoneNumber" => $this->input->post("PhoneNumber")
			//TODO: add other fields
		);


		$userAccount = $this->CustomerService->addCustomer($customerValuesArray);

		if (true) {
			redirect(site_url("login/"));
		} else {
			$vars = array(
				"error" => "Incorrect login details entered"
			);
			$this->getMasterPage("RegisterView", "Register", "Register", $vars);
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
