<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Aboutus extends CI_Controller {



	function Aboutus(){

		parent::__construct();

        // Your own constructor code

		$this->load->helper('utility');

		$this->load->helper('tool');

		$this->load->model('aboutus_model');

		

	}

	

	public function index()

	{

		//Query Pages
		
		
		$sqlPages = "select * from pages where publish='Y'";

		$pages = $this->db->query($sqlPages)->result_array();

		//Query Who We Are

		$sql = "select * from pages where id_pages=1";

		$whoweare = $this->db->query($sql)->row_array();

		

		//Query Our Vision

		$sql2 = "select * from pages where id_pages=2";

		$vision = $this->db->query($sql2)->row_array();

		

		//Query Our Services

		$sql3 = "select * from pages where id_pages=3";

		$services = $this->db->query($sql3)->row_array();

		

		//Query Our History

		$sql4 = "select * from pages where id_pages=4";

		$history = $this->db->query($sql4)->row_array();

		

		$data['whoweare'] = $whoweare;

		$data['vision'] = $vision;

		$data['services'] = $services;

		$data['history'] = $history;
		
		$data['pages'] = $pages;


		

		$this->template->load('template_header','aboutus',$data);

		$this->template->load('template_footer','aboutus',$data);

	}

	

	public function detil()

	{

		$id=$this->uri->segment('3');

		//Query Detil Pages

		$sql = "select * from pages where id_pages=".$id."";

		$detil = $this->db->query($sql)->row_array();
		$data['detaboutus'] = $detil;

	

		$this->template->load('template_header','detaboutus',$data);

		$this->template->load('template_footer','detaboutus',$data);

	}

	

	

	

	

	

}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */