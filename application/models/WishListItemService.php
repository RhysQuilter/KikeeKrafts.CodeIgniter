<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class WishListItemService extends CI_Model
{
	private $table = "productwishlistitem";

	function __construct()
	{
		$this->load->database();
	}

	function addWishListItem($wishListItemValuesArray)
	{
		$this->db->insert($this->table, $wishListItemValuesArray);
		return $this->db->affected_rows() == 1;
	}

	function getWishListItemsByCustomerId($customerNumber)
	{

		$this->db->from($this->table);
		$this->db->where('CustomerNumber', $customerNumber);

		$query = $this->db->get();
		return $query->result();
	}
	function deleteWishListItemByKey($customerNumber, $productId)
	{
		$this->db->where('CustomerNumber', $customerNumber); 
		$this->db->where('ProductId', $productId);
        $this->db->join("dfhdfh", "", "");
		return $this->db->delete($this->table);
	}
    function getProductsInWishListByCustomer($customerNumber)
    {
        $commandText= "CALL GetProductsInWishListByCustomer(?)";
        $query = $this->db->query($commandText, $customerNumber);
        //mysqli_next_result($this->db->conn_id);
		return $query->result();
    }
	function getWishListItemCount()
	{
		return $this->db->count_all('productwishlistitem');
	}
	function getWishItemByKey($customerNumber, $productId)
	{
		$this->db->from($this->table);
		$this->db->where('CustomerNumber', $customerNumber);
		$this->db->where('ProductId', $productId);

		$query = $this->db->get();
		return $query->num_rows() == 0 ? null : $query->result()[0];
	}

	function getWishListItems()
	{
		$this->db->from('productwishlistitem');
		$query = $this->db->get();
		return $query->result();
	}
}