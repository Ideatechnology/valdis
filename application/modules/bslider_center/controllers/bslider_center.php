<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bslider_center extends CI_Controller {

	function Bslider_center(){
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
	
	
	/*public function index()
	{
	
		$sql = "select b.* from  slider b where b.category=2 order by b.id_slider desc";
		$data['query'] = $this->db->query($sql);
		
		$this->template->load('template_backend','v_index',$data);
		
	}
	*/
	
	
	public function index( $offset = 0 ) {
	
			$this->load->library('pagination');
				
			if (isset($_POST['cari_global'])) {
			$data1 = array('s_cari_global' => $_POST['cari_global']);
			$this->session->set_userdata($data1);			
		}
			
			$per_page = 20;  
			$qry = "select b.* from  slider b where b.category=2 ";
			
			
			if ($this->session->userdata('s_cari_global')!="") {
			$qry.="   and b.slider_name like '%".$this->session->userdata('s_cari_global')."%'  ";
			} 
			elseif ($this->session->userdata('s_cari_global')=="") {
			$this->session->unset_userdata('s_cari_global');
			} 	

			
			
			$qry.= "
			order by b.id_slider desc
			"; 
			//echo $qry;
		

			$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 3;
			$config['base_url']= base_url().'/bnews/index'; 
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
			   //'slider_desc' => $this->input->post('slider_desc'),
			   'slider_name' => $this->input->post('slider_name'),
			   'sort_number' => $this->input->post('sort_number'),
			   'category' =>2,
			   
			   'create_time' => date("Y-m-d H:i:s")
			);
			
			
			
			$this->load->helper('uploadut');
		   $this->load->library('image_lib');
		    #TIpe File Upload
			$attachment='';
 			$config['upload_path'] = './uploads/slider_center/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
 			/*$config['max_width']  = '1024';
			$config['max_height']  = '768';*/
 			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$upload = $this->upload->do_upload('userfile');
			
			
			 
			if($upload==FALSE):
			   //die();
			   echo $this->upload->display_errofacility();
			else:
			   $files = $this->upload->data();
  		       $attachment = $files['file_name'];
			  		     $width=200;
			   $height=122;
			   create_thumb($files['full_path']);
  			   resize_image($files['full_path'], $width, $height);
			   
   			endif;
			$data['file_foto'] = $attachment; 
			
			
			

			$this->db->insert('slider', $data);
		
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
		$sql = "select * from slider  where id_slider = '".$id."'";
		$row = $this->db->query($sql)->row_array();
		
		$data['id_slider'] = $row['id_slider'];
		$data['slider_name'] = $row['slider_name'];
		$data['slider_desc'] = $row['slider_desc'];
		$data['publish'] = $row['publish'];
		$data['file_foto'] = $row['file_foto'];
		$data['sort_number'] = $row['sort_number'];
		
		
		
		$this->template->load('template_backend','v_edit',$data);
		
		
	}
	
	
	
	
	
	
public function submitedit()
{
try
{




 
 $data = array( 'publish' => $this->input->post('publish'),
 'create_author' => $this->session->userdata('s_sys_name'),
			   'slider_desc' => $this->input->post('slider_desc'),
			   'slider_name' => $this->input->post('slider_name'),
			   'sort_number' => $this->input->post('sort_number'),
			   'category' =>2,
			   'create_time' => date("Y-m-d H:i:s")
			);
$this->load->helper('uploadut');
		   $this->load->library('image_lib');
			
			#Upload Images
			if (@$_FILES['userfile']['name'] != '') { 
 			$config['upload_path'] = './uploads/slider_center/';
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
			     $width=200;
			   $height=122;
			   create_thumb($imgs['full_path']);
  			   resize_image($imgs['full_path'], $width, $height);
		
			   
  			endif;
			$data['file_foto'] = $attachment1;
			}
			
			
			
			
			
			 $this->db->where('id_slider', $this->input->post('id_slider'));
            $this->db->update('slider', $data);
		
		$data['pesan']="Data Berhasil Diubah";
			

			
redirect('bslider_center');



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
			
			 $this->db->where('id_slider', $id);
            $this->db->delete('slider');


			redirect('bslider_center');




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
