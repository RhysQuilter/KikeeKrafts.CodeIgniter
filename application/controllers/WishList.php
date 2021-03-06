<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class WishList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->library('form_validation');
        $this->load->model('WishListItemService');
        $this->load->model('ProductService');

    }

    public function remove($productId)
    {
        $customerNumber = $this->session->userdata["UserAccountId"];
        $this->WishListItemService->deleteWishListItemByKey($customerNumber, $productId);
        return $this->index();
    }
    public function index()
    {
        $customerNumber = $this->session->userdata["UserAccountId"];
        $products = $this->WishListItemService->getProductsInWishListByCustomer($customerNumber);
        $vars = array(
            'products' => $products
        );
        $this->getMasterPage("WishListView", "Wishlist", "Wishlist", $vars);
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

    private function getSessionCustomerNumber()
    {
        if (isset($this->session->userdata["UserAccountId"]))
            return $this->session->userdata["UserAccountId"];
        else return "";
    }

    private function isLoggedIn()
    {
        if (isset($this->session->userdata["UserAccountId"]))
            return true;
        else return false;
    }
    public function addProductToWishlist($productId)
    {
        $product  = $this->ProductService->getProductById($productId);
        if ($product != NULL) {
            $wishListItemValuesArray = array(
                'CustomerNumber' => $this->getSessionCustomerNumber(),
                'ProductId' => $product->Id
            );

            $this->WishListItemService->addWishListItem($wishListItemValuesArray);

           $this->index();
        } else {
            //TODO Handle Error
        }
    }
}
