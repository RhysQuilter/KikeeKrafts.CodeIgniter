<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CustomerService extends CI_Model
{
    protected $table = "customer";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addCustomer($customer)
    {
        $query = $this->db->insert($this->table, $customer);
        return $this->db->affected_rows() == 1;
    }

	function deleteCustomerById($id) {
		$this->db->where('Id', $id);
		return $this->db->delete($this->table);
	}

    public function getCustomers()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
 
    public function getCustomerById($customerId)
    {
        $query = $this->db->get_where($this->table, array('Id' => $customerId));
        //TODO: Handle 0 row event
        return $query->row();
    }
 
	function updateCustomer($customer) {
		$this->db->where("Id", $customer->Id);
		return $this->db->update($this->table, $customer);
	}

    public function getCustomerByCredentials($email, $password)
    {
        $parameters =  array(
            'email' => $email,
            "password" => hash("ripemd160", $password)
        );
        $query = $this->db->get_where($this->table, $parameters);

        return $query->row();
    }
}
                        
/* End of file Customer.php */
