<?php

defined('BASEPATH') or exit('No direct script access allowed');

class OrderService extends CI_Model
{
    protected $tableName = "order";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addOrder($orderValuesArray)
    {
        $query = $this->db->insert($this->tableName, $orderValuesArray);
        return $this->db->affected_rows() == 1;
    }

    function getOrderCount()
	{
		return $this->db->count_all($this->tableName);
	}
	function getOrderRange($limit, $offset)
	{
		$this->db->limit($limit, $offset);
		$this->db->from($this->tableName);
		$query = $this->db->get();
		return $query->result();
	}


    public function getOrders()
    {
        $this->db->from($this->tableName);
        $query = $this->db->get();
        return $query->result();
    }

    public function getOrderById($id)
    {
        $this->db->from($this->tableName);
        $this->db->where('Id', $id);

        $query = $this->db->get();
        return $query->result()[0];
    }
    public function getOrdersByCustomerNumber($CustomerNumber)
    {
        $this->db->from($this->tableName);
        $this->db->where('CustomerNumber', $CustomerNumber);

        $query = $this->db->get();
        return $query->result();
    }

    function deleteOrderById($orderId)
    {
        $this->db->where('Id', $orderId);
        return $this->db->delete($this->tableName);
    }

    function updateOrder($orderValuesArray)
    {
        $this->db->where("Id", $orderValuesArray["Id"]);
        return $this->db->update($this->tableName, $orderValuesArray);
    }

}
