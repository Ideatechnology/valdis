<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Ijinmasuk_model extends CI_Model{
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	
	 function validation($username, $password)
	{
		$sql =  "SELECT * FROM sys_users WHERE sys_user_name= '".$username."' and sys_password = '". sha1(md5($password)) . "'";
		$query = $this->db->query($sql);
		return $query;
	}	



	
}