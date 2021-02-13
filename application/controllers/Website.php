<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Website extends CI_Controller
{
	public function index()
	{
		$this->load->library("session");
		//TODO HomepageView
		$this->getMasterPage("LoginView", "Login", "Login");
	}
	public function logout()
	{
		redirect(site_url("logout/"));
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