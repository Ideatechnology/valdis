<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photogallery extends CI_Controller {

	function Photogallery(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->helper('tgl');
	}
	
	
	public function index( $offset = 0 ) {
	
			$this->load->library('pagination');
				
			if (isset($_POST['cari_global'])) {
			$data1 = array('s_cari_global' => $_POST['cari_global']);
			$this->session->set_userdata($data1);			
		}
			
			$per_page = 4;  
			$qry = "select b.*,
(select file_foto from albumphoto_gallery where id_albumphoto=b.id_albumphoto order by id_albumphoto_gallery desc limit 1) as fotonya
 from  albumphoto b where b.publish='Y'";
			
			
			if ($this->session->userdata('s_cari_global')!="") {
			$qry.="   and b.albumphoto_name like '%".$this->session->userdata('s_cari_global')."%'  ";
			} 
			elseif ($this->session->userdata('s_cari_global')=="") {
			$this->session->unset_userdata('s_cari_global');
			} 	

			
			
			$qry.= "
			order by b.create_time desc
			"; 
			//echo $qry;
		

			$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 3;
			$config['base_url']= base_url().'/photogallery/index'; 
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
	
		
		$this->template->load('template_header','v_photogallery',$this->data);	
		
		$this->template->load('template_footer_in','v_photogallery');
		
		
	}
	
	
public function index_detail( $offset = 0 ) {

			$IDX=$this->uri->segment(4);
	
			$this->load->library('pagination');
				
			if (isset($_POST['cari_global'])) {
			$data1 = array('s_cari_global' => $_POST['cari_global']);
			$this->session->set_userdata($data1);			
		}
			
			$per_page = 4;  
			$qry = "select b.*,
(select file_foto from albumphoto_gallery where id_albumphoto=b.id_albumphoto order by id_albumphoto_gallery desc limit 1) as fotonya
 from  albumphoto b where b.publish='Y'";
			
			
			if ($this->session->userdata('s_cari_global')!="") {
			$qry.="   and b.albumphoto_name like '%".$this->session->userdata('s_cari_global')."%'  ";
			} 
			elseif ($this->session->userdata('s_cari_global')=="") {
			$this->session->unset_userdata('s_cari_global');
			} 	

			
			
			$qry.= "
			order by b.create_time desc
			"; 
			//echo $qry;
		

			$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 3;
			$config['base_url']= base_url().'/photogallery/index/'; 
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
	
		
		
		$this->data["IDX"]=$IDX;
		
		$this->template->load('template_header','v_photogallery_detail',$this->data);	
		
		$this->template->load('template_footer_in','v_photogallery_detail');
		
		
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
                            
                            
                            