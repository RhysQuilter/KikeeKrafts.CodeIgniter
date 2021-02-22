<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingCart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->library('form_validation');
        $this->load->model('ProductService');
    }

    public function index()
    {
        $this->getMasterPage("CartView", "Cart", "Cart");
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

    public function addProductToCart($productId)
    {
        $this->load->library('cart');
        $cartItem = $this->getCartItemFromProductId($productId);
        $this->cart->insert($cartItem);
        $this->getMasterPage("CartView", "Cart", "Cart");
    }

    public function DeleteCart()
    {
        $this->load->library("cart");
        $this->cart->destroy();
       
    }


    private function getCartItemFromProductId($productId)
    {
        $product  = $this->ProductService->getProductById($productId);
        return $this->createCartItem($product->Id, 1, $product->SalePrice, $product->Description);
    }
    private function createCartItem($id, $quantity, $price, $name, $options = NULL)
    {
        return array(
            'id'      => $id,
            'qty'     => $quantity,
            'price'   => $price,
            'name'    => $name,
            'options' => $options
        );
    }
}
