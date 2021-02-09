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
			'loggedIn' => isset($this->session->userdata["UserAccountId"])
			//username => isset($this->session->userdata["Username"])"
		);
		$this->load->view("index", $vars);
	}
}