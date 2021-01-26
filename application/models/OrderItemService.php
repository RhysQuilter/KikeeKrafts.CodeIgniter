<?php

defined('BASEPATH') or exit('No direct script access allowed');

class OrderItemService extends CI_Model
{
    protected $table = "OrderItem";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addOrderItem($orderItemValuesArray)
    {
        $query = $this->db->insert($this->table, $orderItemValuesArray);
        return $this->db->affected_rows() == 1;
    }


    public function getOrderItems()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function getOrderItemsByOrder($orderId)
    {
		$this->db->from($this->table);
        $this->db->where("OrderNumber", $orderId);
		$query = $this->db->get();
		return $query->result();
    }
    public function getOrderItemByKey($orderId, $productId)
    {
        $parameters =  array(
            "OrderNumber" => $orderId,
            "ProductCode" => $productId
        );
        $query = $this->db->get_where($this->table, $parameters);

        return $query->row();
    }
    function updateOrderItem($orderItemValuesArray)
    {
        $parameters =  array(
            "OrderNumber" => $orderItemValuesArray["OrderNumber"],
            "ProductCode" => $orderItemValuesArray["ProductCode"]
        );
        $this->db->where($this->table, $parameters);
        return $this->db->update($this->table, $orderItemValuesArray);
    }
}
