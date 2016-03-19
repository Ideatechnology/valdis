<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function Gallery(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('contact_model');
		
	}
	
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('captcha');
			
			
	    $original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
        $original_string = implode("", $original_string);
        $captcha = substr(str_shuffle($original_string), 0, 4);
 
            $vals = array(
				'word' => strtoupper($captcha),
				'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
				'font_path' => base_url() . 'system/fonts/arial.ttf',
                'img_width'	 => '120',
                'img_height' => 30,
                'border' => 1, 
                'expiration' => 7200
            );
            $cap = create_captcha($vals);
            $data['image'] = $cap['image'];
			$data['word'] = $cap['word'];
            $this->session->set_userdata('mycaptcha', $cap['word']);
		
		//$data['xxx']="";
		$this->template->load('template_header','contact',$data);
		$this->template->load('template_footer','contact',$data);
	}
	
	public function submit()
	{
		if ( strtoupper($this->input->post('secutity_code')) ==  strtoupper($this->session->userdata('mycaptcha'))) { 
		
			
		
		$data = array( 'name' => $this->input->post('name'),
			   'email' => $this->input->post('email'),
			    'subject' => $this->input->post('subject'),
			   'phone' => $this->input->post('phone'),
			    'description' => $this->input->post('description'),
			   'date' => date("Y-m-d H:i:s")
			);
			
			$this->db->insert('contact', $data);
		}else{
			
			$data['pesan'] = "Kode Keamanan Yang Anda Masukan Salah !!! ";
				
				// load codeigniter captcha helper
            $this->load->helper('captcha');
 
             $original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
        $original_string = implode("", $original_string);
        $captcha = substr(str_shuffle($original_string), 0, 4);
 
            $vals = array(
				'word' => strtoupper($captcha),
                'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
                'img_width'	 => '200',
                'img_height' => 30,
                'border' => 1, 
                'expiration' => 7200
            );
 
            // create captcha image
            $cap = create_captcha($vals);
 
            // store image html code in a variable
            $data['image'] = $cap['image'];
 
            // store the captcha word in a session
            $this->session->set_userdata('mycaptcha', $cap['word']);
				
				$data = array(
								'error_msg' => "Kode Keamanan Salah !!!"
							);
							$this->session->set_userdata($data);
				
				redirect('contact');
			
		}
			
		
			
$from= $this->input->post('email');
$isinya = $this->input->post('name').' - '.$this->input->post('phone')." telah melakukan pengiasian komentar pada tanggal ".date("Y-m-d H:i:s")."<br> Isi Komentar: <br>".$this->input->post('description');
				//konfigurasi email
$config = array();
$config['useragent']= "CodeIgniter";
$config['mailpath']= "/usr/bin/sendmail";
$config['protocol']= "smtp";
$config['smtp_host']= "localhost";
$config['smtp_port']= "25";
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['wordwrap'] = TRUE;
//memanggil library email dan set konfigurasi untuk pengiriman email
$this->load->library('email');
$this->email->initialize($config);
//konfigurasi pengiriman
//$this->email->from($from, 'Markind eL');
$this->email->from($from);
//$this->email->to('kontak@kodam16pattimura.mil.id');
$this->email->to('pendampattimura@gmail.com');

$this->email->subject('PESAN DARI PENGUNJUNG WEBSITE KODAM XVI PATTIMURA');
$this->email->message($isinya);
if($this->email->send()){
//echo '<div class="alert alert-success" role="alert">Komentar anda terkirim</div>';
}else{
//echo '<div class="alert alert-success" role="alert">Komentar anda gagal dikirim</div>';
}

	//	$data['pesan']="Your Order Successfully Sent";
		//redirect('promotion');
		echo "<script>alert('Terima kasih, komentar anda telah dikirim..');window.location='".site_url('contact')."';</script>"; 
		
		
		
		
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */