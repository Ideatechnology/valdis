<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Searching extends CI_Controller{
	
	function Searching(){
		parent::__construct();
        
	}
	
	
	public function index() 
	{
	
		
		
		$this->template->load('template_header','searching');
		$this->template->load('template_footer_in','searching');
 	}
	
	
	
	
	 
}
?>