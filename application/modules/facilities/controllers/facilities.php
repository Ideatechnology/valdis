<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facilities extends CI_Controller {

	function Facilities(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('facilities_model');
		
	}
	
	public function index()
	{
		$this->template->load('template_header','facilities',$data);
		$this->template->load('template_footer','facilities',$data);
	}
	
	public function detail()
	{
		
		$id=explode("-",$this->uri->segment('3'));
		
		//Query RS
		$sql = "select a.*, b.id_facility, b.facility_name, b.facility_desc, b.file_foto_header from facility_category a inner join facility b on a.id_facility_category=b.id_facility_category where b.publish='Y' and b.id_facility='".$id[0]."'";
		$facility = $this->db->query($sql)->row_array();
		
		$data['id_facility'] = $facility['id_facility'];
		$data['facility_name'] = $facility['facility_name'];
		$data['facility_header'] = $facility['file_foto_header'];
		$data['facility_desc'] = $facility['facility_desc'];
		$data['facility_cat_name'] = $facility['facility_category_name'];
		$data['facility_cat_desc'] = $facility['facility_category_desc'];
		
		//Query Gallery Gambar RS
		
		
	
	
		
		
		
		//$this->template->load('roomandsuites',$data);
		$this->template->load('template_header','facilities',$data);
		//$this->template->load('template_header','roomandsuites',$data2);
		$this->template->load('template_footer','facilities',$data);
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */