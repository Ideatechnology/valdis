<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pejabat extends CI_Controller {

	function Pejabat(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('homepage_model');
		
	}
	
	public function index()
	{
		
		$data["test"]="";
		
		$this->template->load('template_header','homepage',$data);
		$this->template->load('template_footer','homepage',$data);
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
                            
                            
                            