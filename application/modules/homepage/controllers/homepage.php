<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function Homepage(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('homepage_model');
		$this->load->helper('tgl');

	}

	public function index()
	{


		//Query Slider TOP
		$sql = "select * from slider where publish='Y' and category=1 order by id_slider asc limit 6";
		$slider = $this->db->query($sql)->result_array();

		$data['slider'] = $slider;

		//Query Slider Center
		$sql = "select * from slider where publish='Y' and category=2 order by create_time desc limit 8";
		$slidercenter = $this->db->query($sql)->result_array();

		$data['slidercenter'] = $slidercenter;

	//Query Selamat Datang

		$sqlwelcome = "select * from pages where publish='Y' and id_pages=1";
		$welcome = $this->db->query($sqlwelcome)->row_array();

		$data['welcome'] = $welcome;


	//Query Satuan

		$sqlsatuan = "select * from news where publish='Y' and category=3 order by create_time desc limit 5";
		$satuan = $this->db->query($sqlsatuan)->result_array();

		$data['satuan'] = $satuan;
	//Query Berita & Kegiatan

		$sqlberita = "select * from news where publish='Y' and category=1 order by create_time desc limit 5";
		$berita = $this->db->query($sqlberita)->result_array();

		$data['berita'] = $berita;


	//Query Luar Terkait

		$sqlberitaluar = "select * from news where publish='Y' and category=6 order by create_time desc limit 5";
		$beritaluar = $this->db->query($sqlberitaluar)->result_array();

		$data['beritaluar'] = $beritaluar;


	//Query Running Text

		$sqlrunningtext = "select * from news where publish='Y' and category=5 order by create_time desc limit 5";
		$runningtext = $this->db->query($sqlrunningtext)->result_array();

		$data['runningtext'] = $runningtext;


	//Query Top Banner

		$sqltopbanner = "select * from banner where publish='Y' and category=1 order by create_time desc limit 1";
		$topbanner = $this->db->query($sqltopbanner)->row_array();

		$data['topbanner'] = $topbanner;

	//Query Side Banner

		$sqlsidebanner = "select * from banner where publish='Y' and category=2 order by create_time desc limit 5";
		$sidebanner = $this->db->query($sqlsidebanner)->result_array();

		$data['sidebanner'] = $sidebanner;

	//Query bottom Banner

		$sqlbottombanner = "select * from banner where publish='Y' and category=3 order by create_time asc";
		$bottombanner = $this->db->query($sqlbottombanner)->result_array();

		$data['bottombanner'] = $bottombanner;

	//Query Galeri Foto

		$sqlfotogaleri= "select * from albumphoto_gallery where publish='Y' order by create_time desc limit 6";
		$fotogaleri= $this->db->query($sqlfotogaleri)->result_array();


		$data['fotogaleri'] = $fotogaleri;





	/*
		//Query HOT News

		$sqlnews = "select * from news where publish='Y' order by create_time desc limit 1";
		$hotnews = $this->db->query($sqlnews)->row_array();

		$data['hotnews'] = $hotnews;

		//Query HOT Promotion

		$sqlpromo = "select * from promo where publish='Y' order by create_time desc limit 1";
		$hotpromo = $this->db->query($sqlpromo)->row_array();

		$data['hotpromo'] = $hotpromo;

		//Query Pages

		$sqlpages1 = "select * from pages where publish='Y' and id_pages=1 ";
		$pages1 = $this->db->query($sqlpages1)->row_array();

		$data['pages1'] = $pages1;

		$sqlpages2 = "select * from pages where publish='Y' and id_pages=2 ";
		$pages2 = $this->db->query($sqlpages2)->row_array();

		$data['pages2'] = $pages2;

		$sqlpages3 = "select * from pages where publish='Y' and id_pages=3 ";
		$pages3 = $this->db->query($sqlpages3)->row_array();

		$data['pages3'] = $pages3;

		$sqlpages4 = "select * from pages where publish='Y' and id_pages=4 ";
		$pages4 = $this->db->query($sqlpages4)->row_array();

		$data['pages4'] = $pages4;

		$sqlpages5 = "select * from pages where publish='Y' and id_pages=5 ";
		$pages5 = $this->db->query($sqlpages5)->row_array();

		$data['pages5'] = $pages5;

		$sqlpages6 = "select * from pages where publish='Y' and id_pages=6 ";
		$pages6 = $this->db->query($sqlpages6)->row_array();

		$data['pages6'] = $pages6;

		$sqlpages7 = "select * from pages where publish='Y' and id_pages=7 ";
		$pages7 = $this->db->query($sqlpages7)->row_array();

		$data['pages7'] = $pages7;

		$sqlpages8 = "select * from pages where publish='Y' and id_pages=8 ";
		$pages8 = $this->db->query($sqlpages8)->row_array();

		$data['pages8'] = $pages8;

		$sqlpages9 = "select * from pages where publish='Y' and id_pages=9 ";
		$pages9 = $this->db->query($sqlpages9)->row_array();

		$data['pages9'] = $pages9;

		//Query HOT Event

		$sqlevents = "select * from events where publish='Y' order by create_time desc limit 1";
		$hotevents = $this->db->query($sqlevents)->row_array();

		$data['hotevents'] = $hotevents;

		//Query Image Gallery

		$sqlgallery = "select a.*, b.albumphotovideo_name as kategori from albumphotovideo_gallery a inner join albumphotovideo b on a.id_albumphotovideo=b.id_albumphotovideo  where a.publish='Y' order by rand() desc limit 8 ";
		$hotgallery = $this->db->query($sqlgallery)->result_array();

		$data['hotgallery'] = $hotgallery;

		//Query Testimonial
		$sqltesti = "select * from testimonial where publish='Y' order by rand() desc limit 1";
		$hottestimonial = $this->db->query($sqltesti)->row_array();

		$data['hottestimonial'] = $hottestimonial;

		//Query Testimonial
		$sqlclient = "select * from banner where publish='Y' order by create_time desc limit 10 ";
		$hotclient = $this->db->query($sqlclient)->result_array();

		$data['hotclient'] = $hotclient;

		*/
		$data["xxx"]="";
		$this->template->load('template_header','homepage',$data);
		$this->template->load('template_footer','homepage',$data);
	}



	public function language()
	{

		$param=$this->uri->segment(3);
		if ($param=="eng") { $param1="eng";}
		elseif ($param=="ind") { $param1="ind";} else {
		$param1="ind";
		}

		$data = array(
					'sesi_bahasa' => $param1
				);
		$this->session->set_userdata($data);
		redirect('homepage');

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
