<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    protected $table = 'customer';
    protected $allowedFields = ['custNumber', 'custLastName', 'custFirstName', 'custPhone', 'custAddressLine1', 'custAddressLine2', 'custCity', 'custPostalCode', 'custCountry', 'custCreditLimit', 'custEmail', 'custPassword'];
    protected $returnType = 'Customer';

    public function login()
    {
    }
}
                        
/* End of file Customer.php */
