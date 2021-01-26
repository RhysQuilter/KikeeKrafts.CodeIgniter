<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProductService extends CI_Model
{
	protected $table = "Product";

	function __construct()
	{
		$this->load->database();
	}
	function addProduct($productValuesArray)
	{
		$this->db->insert($this->table, $productValuesArray);
		return $this->db->affected_rows() == 1;
	}
	function deleteProductById($productId)
	{
		$this->db->where('Id', $productId);
		return $this->db->delete($this->table);
	}
	function getProductById($id)
	{
		$this->db->from($this->table);
		$this->db->where('Id', $id);
		$query = $this->db->get();
		return $query->result()[0];
	}
	function getProductCount()
	{
		return $this->db->count_all($this->table);
	}
	function getProductRange($limit, $offset)
	{
		$this->db->limit($limit, $offset);
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}
	function getProducts()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}
	function updateProduct($productValuesArray)
	{
		$this->db->where('Id', $productValuesArray["Id"]);
		return $this->db->update($this->table, $productValuesArray);
	}
}
