<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		
		
	}
	 
	public function index()
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin Girişi || ";
		$data["menu"]="admin giriş";
		
		$this->load->view('admin/login',$data);
		
	}



		public function login_ol()
	{







		$yonetici_kullaniciadi= $this->input->post("yonetici_kullaniciadi");
		$yonetici_sifre= $this->input->post("yonetici_sifre");
		
		//Zararlı kodlardan temizleme
		 $yonetici_kullaniciadi = $this->security->xss_clean($yonetici_kullaniciadi);
		 $yonetici_sifre = $this->security->xss_clean($yonetici_sifre);
		$this->load->model('Database_Model');
		
		$result= $this->Database_Model->login("yonetici",$yonetici_kullaniciadi,$yonetici_sifre);
		
			if($result)
			{
				//KUllanıcı varsa bilgileri diziye aktarılıyor
				$sess_array=array(
				'yonetici_id'=>$result[0]->yonetici_id,
				'yonetici_adsoy'=>$result[0]->yonetici_adsoyad,
				'yonetici_kullaniciadi'=>$result[0]->yonetici_kullaniciadi,
				
				
				);
			$this->session->set_userdata('admin_session',$sess_array);
			
			redirect(base_url().'admin');
			
			}
			else{
				$this->session->set_flashdata("mesaj","Geçersiz Kullanıcı ya da Şifre");
				redirect(base_url().'admin/login');
			}
	}
	
	
		public function login_out()
	{
		 $this->session->unset_userdata('admin_session');
         $this->session->sess_destroy();
         redirect(base_url().'admin/login');
	}


}