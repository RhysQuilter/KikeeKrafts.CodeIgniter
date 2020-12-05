<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CustomerModel extends CI_Model
{
    protected $table = "customer";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCustomers()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function getCustomer($custNumber)
    {
        $query = $this->db->get_where($this->table , array('custNumber' => $custNumber));
        return $query->row();
    }
}
                        
/* End of file Customer.php */
