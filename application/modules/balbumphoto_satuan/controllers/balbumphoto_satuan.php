<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Balbumphoto_satuan extends CI_Controller {

	function Balbumphoto_satuan(){
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
	
	
	public function index1()
	{
	
		$sql = "select  a.* from albumphoto a order by a.create_time desc";
		$data['query'] = $this->db->query($sql);
		
		$this->template->load('template_backend','v_index',$data);
		
	}
	
	
	public function index( $offset = 0 ) {
	
			$this->load->library('pagination');
				
			if (isset($_POST['cari_global'])) {
			$data1 = array('s_cari_global' => $_POST['cari_global']);
			$this->session->set_userdata($data1);			
		}
			
			$per_page = 10;  
			$qry = "select  a.* from albumphoto a where a.sys_user_name='".$this->session->userdata('sys_user_name')."' ";
			
			
			if ($this->session->userdata('s_cari_global')!="") {
			$qry.="   where a.albumphoto_name like '%".$this->session->userdata('s_cari_global')."%'  ";
			} 
			elseif ($this->session->userdata('s_cari_global')=="") {
			$this->session->unset_userdata('s_cari_global');
			} 	

			
			
			$qry.= "
			order by a.create_time desc
			"; 
			//echo $qry;
		

			$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
			$config['total_rows'] = $this->db->query($qry)->num_rows();
			$config['per_page']= $per_page;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['uri_segment'] = 3;
			$config['base_url']= base_url().'/balbumphoto_satuan/index'; 
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
  'sys_user_name' => $this->session->userdata('sys_user_name'),
			   'albumphoto_desc' => $this->input->post('albumphoto_desc'),
			   'albumphoto_name' => $this->input->post('albumphoto_name'),
			     'albumphoto_desc_eng' => $this->input->post('albumphoto_desc_eng'),
			   'albumphoto_name_eng' => $this->input->post('albumphoto_name_eng'),
			   'sort_number' => $this->input->post('sort_number'),
			  // 'create_time' => date("Y-m-d H:i:s")
			   'create_time' => $this->input->post('create_time')." ".date("H:i:s")
			);

			$this->db->insert('albumphoto', $data);
		
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
		$sql = "select * from albumphoto  where id_albumphoto = '".$id."'";
		$row = $this->db->query($sql)->row_array();
		
		$data['id_albumphoto'] = $row['id_albumphoto'];
		$data['albumphoto_name'] = $row['albumphoto_name'];
		$data['albumphoto_desc'] = $row['albumphoto_desc'];
		$data['albumphoto_name_eng'] = $row['albumphoto_name_eng'];
		$data['albumphoto_desc_eng'] = $row['albumphoto_desc_eng'];
		$data['publish'] = $row['publish'];
		$data['create_time'] = $row['create_time'];
		
		$this->template->load('template_backend','v_edit',$data);
		
		
	}
	
	
	
	
	
	
public function submitedit()
{
try
{


$this->db->query("UPDATE albumphoto_gallery SET publish='".$this->input->post('publish')."' WHERE id_albumphoto='".$this->input->post('id_albumphoto')."'");


 
 $data = array( 'publish' => $this->input->post('publish'),
 'create_author' => $this->session->userdata('s_sys_name'),
 'sys_user_name' => $this->session->userdata('sys_user_name'),
			   'albumphoto_desc' => $this->input->post('albumphoto_desc'),
			   'albumphoto_name' => $this->input->post('albumphoto_name'),
			      'albumphoto_desc_eng' => $this->input->post('albumphoto_desc_eng'),
			   'albumphoto_name_eng' => $this->input->post('albumphoto_name_eng'),
			   'create_time' => $this->input->post('create_time')." ".date("H:i:s")
			);

			
			 $this->db->where('id_albumphoto', $this->input->post('id_albumphoto'));
            $this->db->update('albumphoto', $data);
		
		$data['pesan']="Data Berhasil Diubah";
			

			
redirect('balbumphoto_satuan');



}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}
	
	
	
	
	
	
	
	public function edit_image()
	{
		$id = $this->uri->segment(3);
		
		$sql = "select * from albumphoto  where id_albumphoto = '".$id."'";
		$row = $this->db->query($sql)->row_array();
		$data['id_albumphoto'] = $row['id_albumphoto'];
		$data['albumphoto_name'] = $row['albumphoto_name'];
		$data['albumphoto_desc'] = $row['albumphoto_desc'];
		$data['create_time'] = $row['create_time'];
		
		
		$this->template->load('template_backend','v_edit_image',$data);
		
		
	}
	
	
		 public function submiteditimage()
{
try
{

	
	
	 $data = array( 'id_albumphoto' => $this->input->post('id_albumphoto'),
			 'publish' => $this->input->post('publish'),
			 'create_author' => $this->session->userdata('s_sys_name'),
			 'sys_user_name' => $this->session->userdata('sys_user_name'),
						   'albumphoto_gallery_desc' => $this->input->post('albumphoto_gallery_name'),
						   'albumphoto_gallery_name' => $this->input->post('albumphoto_gallery_name'),
						   'create_time' => $this->input->post('create_time')
						);
			
		
			
		
			
			$this->load->helper('uploadut');
		   $this->load->library('image_lib');
		    #TIpe File Upload
			$attachment='';
 			$config['upload_path'] = './uploads/albumphoto/';
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
			   $width=270;
			   $height=202;
			   create_thumb($files['full_path']);
  			   resize_image($files['full_path'], $width, $height);
			   
   			endif;
			$data['file_foto'] = $attachment; 
			
			

			$this->db->insert('albumphoto_gallery', $data);
	
	
	
		
			$data['pesan']="Data Berhasil Ditambahkan";
			
	
redirect('balbumphoto_satuan/edit_image/'.$this->input->post('id_albumphoto').'',$data);


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
			
			 $this->db->where('id_albumphoto', $id);
            $this->db->delete('albumphoto_gallery');
			
			 $this->db->where('id_albumphoto', $id);
            $this->db->delete('albumphoto');
			
			
			


			redirect('balbumphoto_satuan');




}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}




public function submithapusimage()
{
try
{


			$id = $this->uri->segment(3);
			$idx = $this->uri->segment(4);
			
			 $this->db->where('id_albumphoto_gallery', $id);
            $this->db->delete('albumphoto_gallery');


			redirect('balbumphoto_satuan/edit_image/'.$idx.'');




}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}



public function submitpublishimage()
{
try
{


			$id = $this->uri->segment(3);
			$idx = $this->uri->segment(4);
			$idy = $this->uri->segment(5);
			
			$this->db->query("UPDATE albumphoto_gallery SET publish='".$idy."' WHERE id_albumphoto_gallery='".$id."'");
			//echo "UPDATE albumphoto_gallery SET publish='".$idy."' WHERE id_albumphoto_gallery='".$id."'";
			
			
			redirect('balbumphoto_satuan/edit_image/'.$idx.'');




}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}









	
	
}

/* End of file welcome.php */
/* Location: ./application/controllealbumphoto/welcome.php */
