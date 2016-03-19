<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	function News(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('news_model');
		
	}
	
	public function index()
	{

		 
		$this->load->library('pagination');
		 $per_page = 4;  
		$qry = "select * from news where category=1 order by id_news desc";

		$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 3;
			$config['base_url']= base_url().'/index.php/news/index'; 
			$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
			$this->pagination->initialize($config);
			$this->data['paginglinks'] = $this->pagination->create_links();    
			$this->data['per_page'] = $this->uri->segment(3);      
			$this->data['offset'] = $offset ;
			if($this->data['paginglinks']!= '') {
			  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
			}   
			$qry .= " limit {$per_page} offset {$offset} ";
		
						
		$this->data['news'] = $this->db->query($qry)->result_array();
	
		$this->template->load('template_header','news',$this->data);
		$this->template->load('template_footer_in','news',$this->data);
	}
	
	public function detil()
	{
		$id=explode("-",$this->uri->segment('3'));
		
		//Query Event
		$sql = "select * from news where id_news=".$id[0]."";
		$qry = "select * from news where category=1 limit 5 order by id_news desc";
		
		$news = $this->db->query($sql)->row_array();
		$lainya = $this->db->query($qry)->result_array();
		
		$data['detnews'] = $news;
		$data['detlainya'] = $lainya;
		$this->template->load('template_header','detnews',$data);
		$this->template->load('template_footer_in','detnews',$data);
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */