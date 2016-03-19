<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ijinmasuk extends CI_Controller {

	function Ijinmasuk(){
		parent::__construct();
        // Your own constructor code
		$this->load->helper('utility');
		$this->load->helper('tool');
		$this->load->model('ijinmasuk_model');
		//$this->is_logged_in();
	}
	
	public function index()
	{		

		

		if($this->session->userdata('is_logged_in')){
		redirect('backpage');
		} else {
		
		
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
		
		
		
		$this->template->load('template_backend','v_ijinmasuk',$data);		
		}
	}
	
	
	
	function validate(){
	
	
	
	
	
		if (!$this->_user_validation())
		{
			$this->session->set_userdata('error_msg', validation_errors());
			$this->index();
		}
		else
		{
		
			/*$this->load->model('ijinmasuk_model');
			$username = $this->input->post('sys_user_name');
			$password = $this->input->post('sys_password');
			$query = $this->ijinmasuk_model->validation($username, $password);

			if($query->num_rows == 1)
			{
				$row = $query->row();
				$data = array(
					'sys_user_name' => $row->sys_user_name,
					's_sys_email' =>$row->sys_email,
					's_sys_name' =>$row->sys_name,
					's_sys_type' =>$row->sys_type,
                    'is_logged_in' => TRUE
				);
				$this->session->set_userdata($data);
				redirect('backpage');
			}else{
				$data = array(
					'error_msg' => "Username dan/atau Password salah !"
				);
				$this->session->set_userdata($data);
				redirect('ijinmasuk');
			}
			*/
			
			
			
		if ( strtoupper($this->input->post('secutity_code')) ==  strtoupper($this->session->userdata('mycaptcha'))) { 
		
						$this->load->model('ijinmasuk_model');
			$username = $this->input->post('sys_user_name');
			$password = $this->input->post('sys_password');
			$query = $this->ijinmasuk_model->validation($username, $password);

			if($query->num_rows == 1)
			{
				$row = $query->row();
				$data = array(
					'sys_user_name' => $row->sys_user_name,
					's_sys_email' =>$row->sys_email,
					's_sys_name' =>$row->sys_name,
					's_sys_type' =>$row->sys_type,
                    'is_logged_in' => TRUE
				);
				$this->session->set_userdata($data);
				
				$this->db->query("UPDATE sys_users SET  sys_ip_address='".$this->input->ip_address()."'  ,  sys_login_time='".date("Y-m-d H:i:s")."' WHERE sys_user_name='".$this->session->userdata('sys_user_name')."'");
				
				redirect('backpage');
				
						}else{
							$data = array(
								'error_msg' => "Username dan/atau Password salah !"
							);
							$this->session->set_userdata($data);
							redirect('ijinmasuk');
						}
			
			} else {
				
				$data['pesan'] = "Kode Keamanan Yang Anda Masukan Salah !!!";
				
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
				
				redirect('ijinmasuk');
				}
			
			
        
		
		}
	}

	
	function _user_validation(){
		$this->form_validation->set_rules('sys_user_name', 'Username', 'trim|required');
		$this->form_validation->set_rules('sys_password', 'Password', 'trim|required');

		return $this->form_validation->run();
	}

	function keluar(){
		
		$this->db->query("UPDATE sys_users SET sys_logout_time='".date("Y-m-d H:i:s")."' WHERE sys_user_name='".$this->session->userdata('sys_user_name')."'");
		
		$this->session->sess_destroy();
        redirect('ijinmasuk');
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */