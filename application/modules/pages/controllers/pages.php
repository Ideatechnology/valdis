<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function Pages(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		
	}
	
	
	public function index()
	{
		
		
		
		$id=$this->uri->segment(3);
		if ($id=="") { redirect('homepage');}
		
		
	}
	
	
	public function read()
	{
		
		
		
		
		$id=$this->uri->segment(3);
		if ($id=="") { redirect('homepage');}
		
		
   $sql = "select * from pages where publish='Y' and id_pages='".$id[0]."'";   
   $query = $this->db->query($sql);
   $data['field'] = $query->row_array();
		
		
		$this->template->load('template_header','read',$data);
		
		$this->template->load('template_footer_in','read');
		
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
                            
                            
                            