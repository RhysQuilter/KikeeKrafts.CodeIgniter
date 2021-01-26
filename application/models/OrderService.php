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
        $this->db->from('orders');
	$query = $this->db->get();
	return $query->result();
    }
 
    public function getOrderById($OrderNumber)
    {
        $this->db->select("OrderNumber, OrderDate, RequiredDate, ShippedDate, Status, Comments, CustomerNumber");
		$this->db->from('orders');
		$this->db->where('ordernumber', $OrderNumber);

		$query = $this->db->get();
		return $query->result()[0];
    }
    
 function deleteOrderById($OrderNumber)
	{
		$this->db->where('ordernumber', $OrderNumber);
		return $this->db->delete($this->table);
	}
	
        function updateOrder($orders) {
		$this->db->where("ordernumber", $orders->Id);
		return $this->db->update($this->table, $orders);
	}
        
        function getOrderCount()
	{
		return $this->db->count_all('orders');
	}
        

   
}
                        
/* End of file Customer.php */
