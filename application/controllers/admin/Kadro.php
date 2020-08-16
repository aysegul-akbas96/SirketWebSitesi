<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kadro extends CI_Controller {

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
		$query=$this->db->query("SELECT * FROM yonetimkadrosu ORDER BY yonetim_id");
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

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();
		     $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();



		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kadrosu || ";
		$data["menu"]="yönetim kadrosu";


	
		$this->load->view('admin/kadro_listele',$data);
		
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
		$data["sayfa"]="Yönetim Kadrosu || ";
		$data["menu"]="yönetim kadrosu";


	
		$this->load->view('admin/kadro_ekle',$data);
		
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


		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kadrosu || ";
		$data["menu"]="yönetim kadrosu";

			
		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();


		$query=$this->db->query("SELECT * FROM menu_alt ");
		$data["alt_ad_getir"]=$query->result();



	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 600;
        $config['max_width']            = 624;
        $config['max_height']           = 600;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('yonetim_resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\kadro_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
			    

			     $data=array(

		 			
                        'yonetim_adsoyad'=>$this->input->post('yonetim_adsoyad'),
                        'yonetim_aciklama'=>$this->input->post('yonetim_aciklama'),
                      
                       
						'yonetim_resim'=>$upload_data["file_name"],
						'yonetim_telefon'=>$this->input->post('yonetim_telefon'),
						'yonetim_mail'=>$this->input->post('yonetim_mail'),
						'yonetim_linkedin'=>$this->input->post('yonetim_linkedin'),
						
							
                       
                 );

              
             	$this->db->insert("yonetimkadrosu",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/kadro");

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

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();
		     $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();


		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kadrosu || ";
		$data["menu"]="yönetim kadrosu";


		$query=$this->db->query("SELECT * FROM yonetimkadrosu WHERE yonetim_id=$id");
				$data["veri"]=$query->result();
	
		$this->load->view('admin/kadro_duzenle',$data);
		
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
		$data["sayfa"]="Yönetim Kadrosu || ";
		$data["menu"]="yönetim kadrosu";

		 $data=array(

                      'yonetim_adsoyad'=>$this->input->post('yonetim_adsoyad'),
                        'yonetim_aciklama'=>$this->input->post('yonetim_aciklama'),
                      
                       
						
						'yonetim_telefon'=>$this->input->post('yonetim_telefon'),
						'yonetim_mail'=>$this->input->post('yonetim_mail'),
						'yonetim_linkedin'=>$this->input->post('yonetim_linkedin'),
                        
                       
                 );
			
			   $this->update_data("yonetimkadrosu",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/kadro");

	}
	
	public function sil($id)
	{
			    $this->db->query("DELETE FROM yonetimkadrosu WHERE yonetim_id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/kadro");
	}


	  public function update_data($table,$data,$id){
		$this->db->where('yonetim_id',$id);
		$this->db->update($table,$data);
		return true;
		
	}






public function resim_yukle($id)
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
        	
            $query=$this->db->query("SELECT * FROM yonetimkadrosu WHERE yonetim_id=$id");
			$data["veri"]=$query->result();    
            $data["id"]=$id;




		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kadrosu || ";
		$data["menu"]="yönetim kadrosu";
                
            $this->load->view('admin/kadro_resim_yukle',$data);

        }
     
		  public function resim_kaydet($id)
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


			
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kadrosu || ";
		$data["menu"]="yönetim kadrosu";
 
			
		$data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 600;
        $config['max_width']            = 624;
        $config['max_height']           = 600;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\kadro_resim_yukle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
              		'yonetim_resim'=>$upload_data["file_name"]
              	);
             	
              	$this->update_data("yonetimkadrosu",$data,$id);

              	redirect(base_url().'admin/kadro');

			
						
            }						
		
	}	



	


}
