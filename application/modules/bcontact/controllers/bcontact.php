<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bcontact extends CI_Controller {

	function Bcontact(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->library('auth');
			$this->load->helper('url');
		
		$this->auth->check_user_authentification();
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		$this->is_logged_in();
		
	}
	
	function is_logged_in(){
		if(!$this->session->userdata('is_logged_in')){
			redirect('ijinmasuk');
		}
    }
	
	
	public function index( $offset = 0 ) {
	
			$this->load->library('pagination');
				
			if (isset($_POST['cari_global'])) {
			$data1 = array('s_cari_global' => $_POST['cari_global']);
			$this->session->set_userdata($data1);			
		}
			
			$per_page = 20;  
			$qry = "select b.* from  contact b ";
			
			
			if ($this->session->userdata('s_cari_global')!="") {
			$qry.="   where  (b.name like '%".$this->session->userdata('s_cari_global')."%' or b.description like '%".$this->session->userdata('s_cari_global')."%'   )";
			} 
			elseif ($this->session->userdata('s_cari_global')=="") {
			$this->session->unset_userdata('s_cari_global');
			} 	

			
			
			$qry.= "
			order by b.date desc
			"; 
			//echo $qry;
		

			$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 3;
			$config['base_url']= base_url().'/bcontact/index'; 
			$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
			$this->pagination->initialize($config);
			$this->data['paginglinks'] = $this->pagination->create_links();    
			$this->data['per_page'] = $this->uri->segment(3);      
			$this->data['offset'] = $offset ;
			if($this->data['paginglinks']!= '') {
			  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
			}   
			$qry .= " limit {$per_page} offset {$offset} ";
			$this->data['query'] = $this->db->query($qry)->result_array();     
	
		
	$this->template->load('template_backend','v_index',$this->data);	
	
	

	
   }
	
	
	
	
	
	
	
	
	
	public function submithapus()
{
try
{


			$id = $this->uri->segment(3);
			
			 $this->db->where('id_contact', $id);
            $this->db->delete('contact');


			redirect('bcontact');




}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}





	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
