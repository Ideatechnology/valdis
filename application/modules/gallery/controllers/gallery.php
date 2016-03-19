                                <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function Gallery(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('gallery_model');
		
	}
	
	public function index()
	{
	
	//Query Kategori Gallery
		$sql = "select * from albumphoto";
		$kategori = $this->db->query($sql)->result_array();			
	
	//Query Galleri
	//$sql2 = "select a.*, b.albumphoto_name as kategori from albumphoto_gallery a left join albumphoto b on a.id_albumphoto=b.id_albumphoto where a.publish='Y'";
		//$gallery = $this->db->query($sql2)->result_array();
		
	//	$data['gallery'] = $gallery; 
		
		$data['kategori'] = $kategori;
		
		
	/*	
		
		
		 $this->load->library('pagination');
		 
		 $qry = "select a.*, b.albumphoto_name as kategori from albumphoto_gallery a left join albumphoto b on a.id_albumphoto=b.id_albumphoto where a.publish='Y' order by a.id_albumphoto_gallery desc ";

$limit = 10;
$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);

$config['base_url'] = base_url().'/index.php/gallery/index/';
$config['total_rows'] = $this->db->query($qry)->num_rows();
$config['uri_segment'] = 3;
$config['per_page'] = $limit;
$config['num_links'] = 20;
$config['full_tag_open'] = '<div id="pagination">';
$config['full_tag_close'] = '</div>';

$this->pagination->initialize($config);

$qry .= " limit {$limit} offset {$offset} ";

$data['gallery'] = $this->db->query($qry)->result_array();;
		*/
		$this->template->load('template_header','gallery',$data);
		$this->template->load('template_footer','gallery',$data);
	}
	
	
	
	
	public function album()
	{
	$id=$this->uri->segment('3');
	//Query Kategori Gallery
		$sql = "select * from albumphoto";
		$kategori = $this->db->query($sql)->result_array();			
	
	/*Query Galleri*/
		$sql2 = "select a.*, b.albumphoto_name as kategori from albumphoto_gallery a left join albumphoto b on a.id_albumphoto=b.id_albumphoto where a.publish='Y' and a.id_albumphoto=".$id."";
		$gallery = $this->db->query($sql2)->result_array();
		
		$data['gallery'] = $gallery; 
		
		$data['kategori'] = $kategori;
		
		
		
		
		
		
		
		
		$this->template->load('template_header','detail',$data);
		$this->template->load('template_footer','detail',$data);
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
                            