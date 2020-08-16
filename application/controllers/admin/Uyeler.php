<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
		$this->load->database();
		//$this->load->library('session');
		
		
		if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}
        }
 
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM yonetici ORDER BY yonetici_adsoyad");
		$data["veriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_id=1");
			$data["s"]=$query->result();   
			$query=$this->db->query("SELECT * FROM menu where menu_id=2");
			$data["h"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=3");
			$data["m"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=4");
			$data["g"]=$query->result();
	        $query=$this->db->query("SELECT * FROM menu where menu_id=5");
			$data["hakki"]=$query->result();

			    $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();


$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin || ";
		$data["menu"]="admin ";


	
		$this->load->view('admin/uyeler_listele',$data);
		
	}

    public function ekle()
	{
	
			 $query=$this->db->query("SELECT * FROM menu where menu_id=1");
			$data["s"]=$query->result();   
			$query=$this->db->query("SELECT * FROM menu where menu_id=2");
			$data["h"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=3");
			$data["m"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=4");
			$data["g"]=$query->result();
	        $query=$this->db->query("SELECT * FROM menu where menu_id=5");
			$data["hakki"]=$query->result();
			    $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();


$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin || ";
		$data["menu"]="admin ";


		$this->load->view('admin/uye_ekle',$data);
		
	}


		public function ekle_kaydet()
	{
			 $query=$this->db->query("SELECT * FROM menu where menu_id=1");
			$data["s"]=$query->result();   
			$query=$this->db->query("SELECT * FROM menu where menu_id=2");
			$data["h"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=3");
			$data["m"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=4");
			$data["g"]=$query->result();
	        $query=$this->db->query("SELECT * FROM menu where menu_id=5");
			$data["hakki"]=$query->result();
			    $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();

$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin || ";
		$data["menu"]="admin ";


		 $data=array(

                        'yonetici_adsoyad'=>$this->input->post('yonetici_adsoyad'),
                        'yonetici_kullaniciadi'=>$this->input->post('yonetici_kullaniciadi'),
                        'yonetici_sifre'=>$this->input->post('yonetici_sifre'),
                        
                       
                 );
               $this->db->insert('yonetici',$data);
			   $this->session->set_flashdata("mesaj","Üye Kaydı Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/uyeler");

	}




	public function duzenle($id)
	{
			 $query=$this->db->query("SELECT * FROM menu where menu_id=1");
			$data["s"]=$query->result();   
			$query=$this->db->query("SELECT * FROM menu where menu_id=2");
			$data["h"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=3");
			$data["m"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=4");
			$data["g"]=$query->result();
	        $query=$this->db->query("SELECT * FROM menu where menu_id=5");
			$data["hakki"]=$query->result();
			    $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM yonetici WHERE yonetici_id=$id");
				$data["veri"]=$query->result();

$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin || ";
		$data["menu"]="admin ";

	
		$this->load->view('admin/uye_duzenle',$data);
		
	}


	public function guncelle($id)
	{
			 $query=$this->db->query("SELECT * FROM menu where menu_id=1");
			$data["s"]=$query->result();   
			$query=$this->db->query("SELECT * FROM menu where menu_id=2");
			$data["h"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=3");
			$data["m"]=$query->result();
			$query=$this->db->query("SELECT * FROM menu where menu_id=4");
			$data["g"]=$query->result();
	        $query=$this->db->query("SELECT * FROM menu where menu_id=5");
			$data["hakki"]=$query->result();
			    $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();

		
$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin || ";
		$data["menu"]="admin ";

			
		 $data=array(

                        'yonetici_adsoyad'=>$this->input->post('yonetici_adsoyad'),
                        'yonetici_kullaniciadi'=>$this->input->post('yonetici_kullaniciadi'),
                        'yonetici_sifre'=>$this->input->post('yonetici_sifre'),
                        
                       
                 );
			
			   $this->update_data("yonetici",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/uyeler");

	}
	
	public function sil($id)
	{
			    $this->db->query("DELETE FROM yonetici WHERE yonetici_id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/uyeler");
	}


	  public function update_data($table,$data,$id){
		$this->db->where('yonetici_id',$id);
		$this->db->update($table,$data);
		return true;
		
	}

	


}
