<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bnews_satuan extends CI_Controller {

	function Bnews_satuan(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->library('auth');
			$this->load->helper('url');
		$this->load->model('bnews_model');
		
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
			$qry = "select b.* from  news b where b.category=1 and b.sys_user_name='".$this->session->userdata('sys_user_name')."'";
			
			
			if ($this->session->userdata('s_cari_global')!="") {
			$qry.="   and b.news_name like '%".$this->session->userdata('s_cari_global')."%'  ";
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
			$config['base_url']= base_url().'/bnews_satuan/index'; 
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
	
	
	public function index1()
	{
	
		$sql = "select b.* from  news b order by b.create_time desc";
		$data['query'] = $this->db->query($sql);
		
		$this->template->load('template_backend','v_index',$data);
		
	}
	
	
		public function add()
	{
		
		
		$this->template->load('template_backend','v_add');
		
		
	}
	
	
	
	 public function submit()
{
try
{


 
 $data = array( 'publish' => $this->input->post('publish'),
 'create_author' => $this->session->userdata('s_sys_name'),
			   'news_desc' => $this->input->post('news_desc'),
			   'news_name' => $this->input->post('news_name'),
			   'news_desc_eng' => $this->input->post('news_desc_eng'),
			   'news_name_eng' => $this->input->post('news_name_eng'),
			    'category' => 1,
			   
			   'create_time' => $this->input->post('create_time')." ".date("H:i:s")
			   
			);
			
			
			
			$this->load->helper('uploadut');
		   $this->load->library('image_lib');
		    #TIpe File Upload
			$attachment='';
 			$config['upload_path'] = './uploads/news/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
 			/*$config['max_width']  = '1024';
			$config['max_height']  = '768';*/
 			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$upload = $this->upload->do_upload('userfile');
			
			
			 
			if($upload==FALSE):
			   //die();
			   echo $this->upload->display_errors();
			else:
			   $files = $this->upload->data();
  		       $attachment = $files['file_name'];
			   $width=340;
			   $height=190;
			   create_thumb($files['full_path']);
  			   resize_image($files['full_path'], $width, $height);
			   
   			endif;
			$data['file_foto'] = $attachment; 
			
			
			

			$this->db->insert('news', $data);
		
			$data['pesan']="Data Berhasil Ditambahkan";
			$this->template->load('template_backend','v_add',$data);




}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function edit()
	{
		$id = $this->uri->segment(3);
		$sql = "select * from news  where id_news = '".$id."'";
		$row = $this->db->query($sql)->row_array();
		
		$data['id_news'] = $row['id_news'];
		$data['news_name'] = $row['news_name'];
		$data['news_name_eng'] = $row['news_name_eng'];
		$data['news_desc'] = $row['news_desc'];
		$data['news_desc_eng'] = $row['news_desc_eng'];
		$data['publish'] = $row['publish'];
		$data['file_foto'] = $row['file_foto']; $data['create_time'] = $row['create_time'];
		
		
		$this->template->load('template_backend','v_edit',$data);
		
		
	}
	
	
	
	
	
	
public function submitedit()
{
try
{




 
 $data = array( 'publish' => $this->input->post('publish'),
 'create_author' => $this->session->userdata('s_sys_name'),
			   'news_desc' => $this->input->post('news_desc'),
			   'news_name' => $this->input->post('news_name'),
			   'category' => 1,
			      'news_desc_eng' => $this->input->post('news_desc_eng'),
			   'news_name_eng' => $this->input->post('news_name_eng'),
			   'create_time' => $this->input->post('create_time')." ".date("H:i:s")
			);
$this->load->helper('uploadut');
		   $this->load->library('image_lib');
			
			#Upload Images
			if (@$_FILES['userfile']['name'] != '') { 
 			$config['upload_path'] = './uploads/news/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
 			//$config['max_width']  = '1024';
			//$config['max_height']  = '768';
  			$this->load->library('upload', $config);
			$this->upload->initialize($config);
  			$upload = $this->upload->do_upload('userfile');
			
			echo $this->upload->display_errors();
 			if($upload==FALSE):
			 // $attachment1 = $edit->file_foto;
			 echo $this->upload->display_errors();
			else:
			   $imgs = $this->upload->data();
   			   $attachment1 = $imgs['file_name'];
			     $width=340;
			   $height=190;
			   create_thumb($imgs['full_path']);
  			   resize_image($imgs['full_path'], $width, $height);
		
			   
  			endif;
			$data['file_foto'] = $attachment1;
			}
			
			
			
			
			
			 $this->db->where('id_news', $this->input->post('id_news'));
            $this->db->update('news', $data);
		
		$data['pesan']="Data Berhasil Diubah";
			

			
redirect('bnews_satuan');



}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}
	
	
	
	
	
	
	

	
	
		
	
	
	
	
	
	
	public function submithapus()
{
try
{


			$id = $this->uri->segment(3);
			
			 $this->db->where('id_news', $id);
            $this->db->delete('news');


			redirect('bnews_satuan');




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
