<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function Artikel(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('news_model');
		$this->load->helper('tgl');
		
	}
	
	public function index()
	{
		
		 
		$this->load->library('pagination');
		$per_page = 4;  
		$qry = "select * from news where category=2 and publish='Y' order by create_time desc";

		$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 3;
			$config['base_url']= base_url().'/artikel/index'; 
			$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
			$this->pagination->initialize($config);
			$this->data['paginglinks'] = $this->pagination->create_links();    
			$this->data['per_page'] = $this->uri->segment(3);      
			$this->data['offset'] = $offset ;
			if($this->data['paginglinks']!= '') {
			  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
			}   
			$qry .= " limit {$per_page} offset {$offset} ";
		
						
		$this->data['artikel'] = $this->db->query($qry)->result_array();
	
		$this->template->load('template_header','artikel',$this->data);
		$this->template->load('template_footer_in','artikel',$this->data);
	}
	
	
	public function arsip()
	{
		$bulan=$this->uri->segment(3);
		$tahun=$this->uri->segment(4);
		 
		$this->load->library('pagination');
		$per_page = 4;  
		$qry = "select * from news where category=2 and publish='Y' and  MONTH(create_time)='".$bulan."' and YEAR(create_time)='".$tahun."' order by create_time  desc";

		$offset = ($this->uri->segment(5) != '' ? $this->uri->segment(5):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 5;
			$config['base_url']= base_url().'/artikel/arsip/'.$bulan.'/'.$tahun.'/'; 
			$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
			$this->pagination->initialize($config);
			$this->data['paginglinks'] = $this->pagination->create_links();    
			$this->data['per_page'] = $this->uri->segment(5);      
			$this->data['offset'] = $offset ;
			if($this->data['paginglinks']!= '') {
			  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
			}   
			$qry .= " limit {$per_page} offset {$offset} ";
		
						
		$this->data['artikel'] = $this->db->query($qry)->result_array();
	
		$this->template->load('template_header','artikel',$this->data);
		$this->template->load('template_footer_in','artikel',$this->data);
	}
	
	public function detail()
	{

		
   $id=explode("-",$this->uri->segment('3'));
   
   
   $jml_dibaca = $this->db->query("select max(be_read) as jml from news where id_news='".$id[0]."'")->row();
   $beread=$jml_dibaca->jml+1;
   $this->db->query("UPDATE news SET be_read=$beread where id_news='".$id[0]."'");
   
   $sql = "select * from news where id_news='".$id[0]."' ";	
   $query = $this->db->query($sql);
   $data['field'] = $query->row_array();
		
		$this->template->load('template_header','detartikel',$data);
		$this->template->load('template_footer_in','detartikel',$data);
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */