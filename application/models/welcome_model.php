<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * summary
 */
class Welcome_Model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
       $this->table_name = 'login'; 
    }

    public function get_data()
    {
    	$q = $this->db->get($this->table_name)->result_array();
    	return $q;
    }
}