<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Logout extends CI_Controller
{
	public function index()
	{
		$this->load->library("session");
		$this->session->sess_destroy();
		$this->getMasterPage("LoginView", "Login", "Login");
	}
	private function getMasterPage($pageName, $pageTitle, $mainHeading, $pageVars = null)
	{
		var_dump(($this->session->userdata["UserAccountId"]));
		var_dump(isset($this->session->userdata["UserAccountId"]));
		
		$vars = array(
			'pageTitle' => $pageTitle,
			'mainContent' => $this->load->view($pageName, $pageVars, true),
			'mainHeading' => $mainHeading,
			'loggedIn' => isset($this->session->userdata["UserAccountId"])
		);


		$this->load->view("index", $vars);
	}
}
