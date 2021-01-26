<?php

defined('BASEPATH') or exit('No direct script access allowed');

class OrderService extends CI_Model
{
    protected $table = "orders";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addOrder($orders)
    {
        $query = $this->db->insert($this->table, $orders);
        return $this->db->affected_rows() == 1;
    }

	

    public function getOrders()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
 
    public function getOrderById($OrderNumber)
    {
        $query = $this->db->get_where($this->table, array('orderNumber' => $OrderNumber));
        //TODO: Handle 0 row event
        return $query->row();
    }
 
	function updateOrder($orders) {
		$this->db->where("Id", $orders->Id);
		return $this->db->update($this->table, $orders);
	}

   
}
                        
/* End of file Customer.php */
