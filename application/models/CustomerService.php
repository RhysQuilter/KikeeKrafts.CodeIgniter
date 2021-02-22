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

    public function addCustomer($customerValuesArray)
    {
        $customerValuesArray["Password"] = hash("ripemd160", $customerValuesArray["Password"]);

        $query = $this->db->insert($this->table, $customerValuesArray);
        return $this->db->affected_rows() == 1;
    }

    function deleteCustomerById($id)
    {
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

    function updateCustomer($customerValuesArray)
    {
        $this->db->where("Id", $customerValuesArray["Id"]);
        return $this->db->update($this->table, $customerValuesArray);
    }

    public function getCustomerByCredentials($email, $password)
    {
        $parameters =  array(
            'email' => $email,
            'password' => hash("ripemd160", $password)
        );
        $query = $this->db->get_where($this->table, $parameters);

        return $query->row();
    }

    public function getAdminByCredentials($email, $password)
    {
        $parameters =  array(
            'email' => $email,
            'password' => hash("ripemd160", $password),
            'IsAdmin' => 1
        );
        $query = $this->db->get_where($this->table, $parameters);

        return $query->row();
    }
}