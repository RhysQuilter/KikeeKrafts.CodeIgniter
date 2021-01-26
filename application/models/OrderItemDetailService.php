<?php

defined('BASEPATH') or exit('No direct script access allowed');

class OrderItemDetailService extends CI_Model
{
    protected $table = "OrderItemDetail";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addOrderItemDetail($orderItemDetailValuesArray)
    {
        $query = $this->db->insert($this->table, $orderItemDetailValuesArray);
        return $this->db->affected_rows() == 1;
    }


    public function getOrderItemDetails()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function getOrderItemDetailsByOrder($orderId)
    {
		$this->db->from($this->table);
        $this->db->where("OrderNumber", $orderId);
		$query = $this->db->get();
		return $query->result();
    }
    public function getOrderItemDetailByKey($orderId, $productId)
    {
        $parameters =  array(
            "OrderNumber" => $orderId,
            "ProductCode" => $productId
        );
        $query = $this->db->get_where($this->table, $parameters);

        return $query->row();
    }
    function updateOrderItemDetail($orderItemDetailValuesArray)
    {
        $parameters =  array(
            "OrderNumber" => $orderItemDetailValuesArray["OrderNumber"],
            "ProductCode" => $orderItemDetailValuesArray["ProductCode"]
        );
        $this->db->where($this->table, $parameters);
        return $this->db->update($this->table, $orderItemDetailValuesArray);
    }
}
