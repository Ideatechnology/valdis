<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Balbumvideo extends CI_Controller {

	function Balbumvideo(){
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
	
	
	public function index()
	{
	
		$sql = "select  a.* from albumvideo a order by a.id_albumvideo desc";
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
			   'albumvideo_desc' => $this->input->post('albumvideo_desc'),
			   'albumvideo_name' => $this->input->post('albumvideo_name'),
			   'sort_number' => $this->input->post('sort_number'),
			   'create_time' => date("Y-m-d H:i:s")
			);

			$this->db->insert('albumvideo', $data);
		
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
		$sql = "select * from albumvideo  where id_albumvideo = '".$id."'";
		$row = $this->db->query($sql)->row_array();
		
		$data['id_albumvideo'] = $row['id_albumvideo'];
		$data['albumvideo_name'] = $row['albumvideo_name'];
		$data['albumvideo_desc'] = $row['albumvideo_desc'];
		$data['publish'] = $row['publish'];
		$data['sort_number'] = $row['sort_number'];
		
		$this->template->load('template_backend','v_edit',$data);
		
		
	}
	
	
	
	
	
	
public function submitedit()
{
try
{


$this->db->query("UPDATE albumvideo_gallery SET publish='".$this->input->post('publish')."' WHERE id_albumvideo='".$this->input->post('id_albumvideo')."'");


 
 $data = array( 'publish' => $this->input->post('publish'),
 'create_author' => $this->session->userdata('s_sys_name'),
			   'albumvideo_desc' => $this->input->post('albumvideo_desc'),
			   'albumvideo_name' => $this->input->post('albumvideo_name'),
			   'sort_number' => $this->input->post('sort_number'),
			   
			   'create_time' => date("Y-m-d H:i:s")
			);

			
			 $this->db->where('id_albumvideo', $this->input->post('id_albumvideo'));
            $this->db->update('albumvideo', $data);
		
		$data['pesan']="Data Berhasil Diubah";
			

			
redirect('balbumvideo');



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
		
		$sql = "select * from albumvideo  where id_albumvideo = '".$id."'";
		$row = $this->db->query($sql)->row_array();
		$data['id_albumvideo'] = $row['id_albumvideo'];
		$data['albumvideo_name'] = $row['albumvideo_name'];
		
		
		$this->template->load('template_backend','v_edit_image',$data);
		
		
	}
	
	
		 public function submiteditimage()
{
try
{

	
	
	 $data = array( 'id_albumvideo' => $this->input->post('id_albumvideo'),
			 'publish' => $this->input->post('publish'),
			 'create_author' => $this->session->userdata('s_sys_name'),
						   'albumvideo_gallery_desc' => $this->input->post('albumvideo_gallery_desc'),
						   'albumvideo_gallery_name' => $this->input->post('albumvideo_gallery_name'),'sort_number' => $this->input->post('sort_number'),
						   
						   'type' => $this->input->post('type'),
						   'link_youtube' => $this->input->post('link_youtube'),
						   'file_foto_youtube' => $this->input->post('file_foto_youtube'),
						   'create_time' => date("Y-m-d H:i:s")
						);
			
			$this->db->insert('albumvideo_gallery', $data);
	
	
 
			  
			
			
		
			$data['pesan']="Data Berhasil Ditambahkan";
			
	
redirect('balbumvideo/edit_image/'.$this->input->post('id_albumvideo').'',$data);


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
			
			 $this->db->where('id_albumvideo', $id);
            $this->db->delete('albumvideo');


			redirect('balbumvideo');




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
			
			 $this->db->where('id_albumvideo_gallery', $id);
            $this->db->delete('albumvideo_gallery');


			redirect('balbumvideo/edit_image/'.$idx.'');




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
			
			$this->db->query("UPDATE albumvideo_gallery SET publish='".$idy."' WHERE id_albumvideo_gallery='".$id."'");
			//echo "UPDATE albumvideo_gallery SET publish='".$idy."' WHERE id_albumvideo_gallery='".$id."'";
			
			
			redirect('balbumvideo/edit_image/'.$idx.'');




}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}









	
	
}

/* End of file welcome.php */
/* Location: ./application/controllealbumvideo/welcome.php */
