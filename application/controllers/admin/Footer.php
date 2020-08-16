<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
                 $this->load->model('Database_Model');
		//$this->load->database();
		//$this->load->library('session');
		if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}
		
        }
 
 
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM footer");
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

	
		   $query=$this->db->query("SELECT * FROM sayfa order by menu_alt_id ");
			$data["sayfagetir"]=$query->result();

			$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Footer Ayarları || ";
		$data["menu"]="footer ayarları ";
	






		$this->load->view('admin/footer_listele',$data);
		
	}










    public function ekle()
	{      $query=$this->db->query("SELECT * FROM menu where menu_id=1");
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

		$query=$this->db->query("SELECT * FROM menu where parent_id");
		$data["menualt_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt ");
		$data["alt_ad_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Footer Ayarları || ";
		$data["menu"]="footer ayarları ";


	
		$this->load->view('admin/footer_ekle',$data);
		
	}
 
public function ekle_kaydet()
	{

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Footer Ayarları || ";
		$data["menu"]="footer ayarları ";
		 $data=array(

                        'footer_adi'=>$this->input->post('footer_adi'),
                        'footer_aciklama'=>$this->input->post('footer_aciklama'),
                        
                       
                 );

               $this->db->insert('footer',$data);
			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/footer");

	}
	


	public function update_data($table,$data,$id){
		$this->db->where('footer_id',$id);
		$this->db->update($table,$data);
		return true;
		
	}

	public function sil($id)
	{
		
		
            $this->db->query("DELETE FROM footer WHERE footer_id=$id");
		
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/footer");
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


		$query=$this->db->query("SELECT * FROM footer WHERE footer_id=$id");
				$data["veri"]=$query->result();


				$query=$this->db->query("SELECT * FROM menu_alt ");
		$data["alt_ad_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Footer Ayarları || ";
		$data["menu"]="footer ayarları ";



		

	
		$this->load->view('admin/footer_duzenle',$data);
		
	}




		public function guncelle($id)
	{


		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();

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

			$query=$this->db->query("SELECT * FROM footer WHERE footer_id=$id");
				$data["veri"]=$query->result();

				$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Footer Ayarları || ";
		$data["menu"]="footer ayarları ";


$data=array(

                        'footer_adi'=>$this->input->post('footer_adi'),
                       
						'footer_aciklama'=>$this->input->post('footer_aciklama'),
						
                       
                        
                 );
				
			   $this->update_data("footer",$data,$id); 
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/footer");

	}







		


              
       
	


}
