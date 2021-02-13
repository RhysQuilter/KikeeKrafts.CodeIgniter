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
