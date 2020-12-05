<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CustomerModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCustomers()
    {
        $query = $this->db->get('customer');
        return $query->result();
    }
}
                        
/* End of file Customer.php */
