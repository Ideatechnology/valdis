<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Btestimonial extends CI_Controller {

	function Btestimonial(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->library('auth');
			$this->load->helper('url');
		$this->load->model('btestimonial_model');
		
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
	
		$sql = "select b.* from  testimonial b";
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
			   'testimonial_desc' => $this->input->post('testimonial_desc'),
			   'testimonial_name' => $this->input->post('testimonial_name'),
			   
			   'create_time' => date("Y-m-d H:i:s")
			);

			$this->db->insert('testimonial', $data);
		
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
		$sql = "select * from testimonial  where id_testimonial = '".$id."'";
		$row = $this->db->query($sql)->row_array();
		
		$data['id_testimonial'] = $row['id_testimonial'];
		$data['testimonial_name'] = $row['testimonial_name'];
		$data['testimonial_desc'] = $row['testimonial_desc'];
		$data['sort_number'] = $row['sort_number'];
		$data['publish'] = $row['publish'];
		
		$this->template->load('template_backend','v_edit',$data);
		
		
	}
	
	
	
	
	
	
public function submitedit()
{
try
{




 
 $data = array( 'publish' => $this->input->post('publish'),
 'create_author' => $this->session->userdata('s_sys_name'),
			   'testimonial_desc' => $this->input->post('testimonial_desc'),
			   'testimonial_name' => $this->input->post('testimonial_name'),
			   
			   'create_time' => date("Y-m-d H:i:s")
			);

			
			 $this->db->where('id_testimonial', $this->input->post('id_testimonial'));
            $this->db->update('testimonial', $data);
		
		$data['pesan']="Data Berhasil Diubah";
			

			
redirect('btestimonial');



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
			
			 $this->db->where('id_testimonial', $id);
            $this->db->delete('testimonial');


			redirect('btestimonial');




}
catch(Exception $err)
{
log_message("error",$err->getMessage());
return show_error($err->getMessage());
}
}





	
	
}

/* End of file welcome.php */
/* Location: ./application/controllefacility/welcome.php */
