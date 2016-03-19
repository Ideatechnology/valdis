<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photopejabat extends CI_Controller {

	function Photopejabat(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		
	}
	
	
	public function index( $offset = 0 ) {
	
			
			$qry = "select b.* from  fotopejabat b where b.publish='Y' order by b.sort_number ASC";
			
			
			$data['query'] = $this->db->query($qry)->result_array();     
	
		
		$this->template->load('template_header','v_pejabat',$data);	
		
		$this->template->load('template_footer_in','v_pejabat');
		
		
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
                            
                            
                            