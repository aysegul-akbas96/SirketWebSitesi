<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

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
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";



		$query=$this->db->query("SELECT * FROM menu");
		$data["veriler"]=$query->result();
	
		$this->load->view('admin/menu_listele',$data);
		
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

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();
		     $query=$this->db->query("SELECT * FROM menu");
			$data["me"]=$query->result();

			$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";

	
		$this->load->view('admin/menu_ekle',$data);
		
	}





public function res()
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
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";



		$this->load->view('admin/resim_yukle');	    
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
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";


	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('menu_resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\menu_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();

			     $data=array(

		 				
                        'menu_adi'=>$this->input->post('menu_adi'),
                        'parent_id'=>$this->input->post('parent_id'),
                        'menu_durum'=>$this->input->post('menu_durum'),
                       
                       
						'menu_resim'=>$upload_data["file_name"],
						'menu_aciklama'=>$this->input->post('menu_aciklama'),
						
						
							
                       
                 );

              
             	$this->db->insert("menu",$data);
			
            }		
			

			   $this->session->set_flashdata("mesaj","Menü Kaydı Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/menu");

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


		$query=$this->db->query("SELECT * FROM menu WHERE menu_id=$id");
				$data["veri"]=$query->result();

				$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";
	
		$this->load->view('admin/menu_duzenle',$data);
		
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
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";



		 $data=array(

                      
                       'menu_adi'=>$this->input->post('menu_adi'),
                      
                       'menu_durum'=>$this->input->post('menu_durum'),
                      
					  
					   'menu_aciklama'=>$this->input->post('menu_aciklama'),
						
                       
                       
                 );
				
			   $this->update_data("menu",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/menu");

	}


	public function update_data($table,$data,$id){
		$this->db->where('menu_id',$id);
		$this->db->update($table,$data);
		return true;
		
	}

	public function sil($id)
	{

		  


		 $query=$this->db->query("SELECT menu_id FROM resim WHERE menu_id=$id");
		 $data["veri"]=$query->result(); 

		 
		
		if($data["veri"]!=null){
			     $this->db->query("DELETE menu,resim FROM menu INNER JOIN resim ON menu.menu_id=resim.menu_id WHERE menu.menu_id=$id");
		}
		else{
       
            $this->db->query("DELETE FROM menu WHERE menu_id=$id");
		}
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/menu");
	}


public function resim_yukle($id)
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


            $query=$this->db->query("SELECT * FROM menu WHERE menu_id=$id");
			$data["veri"]=$query->result();    
            $data["id"]=$id;

            $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";
                
            $this->load->view('admin/resim_yukle',$data);

        }
     
		  public function resim_kaydet($id)
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
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";


		$data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\resim_yukle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
              		'menu_resim'=>$upload_data["file_name"]
              	);
             	
              	$this->update_data("menu",$data,$id);

              	redirect(base_url().'admin/menu');

			
						
            }						
		
	}	



	public function galeri_yukle($id)
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
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";



            $query=$this->db->query("SELECT * FROM resim WHERE menu_id=$id");
			$data["veriler"]=$query->result();    
           $data["id"]=$id;
                
            $this->load->view('admin/galeri_yukle',$data);

        }

     
		  public function galeri_kaydet($id)
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
		$data["sayfa"]="Menü Yönetimi || ";
		$data["menu"]="menu";


		
		$data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))
            {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin/menu/galeri_yukle'.$id);
                    
            }
        else
            {
            	 $upload_data=$this->upload->data();
              	$data=array(
              		'menu_id'=>$id,
              		'resim'=>$upload_data["file_name"]
              	);
             	 $this->db->insert('resim',$data);

			   $this->session->set_flashdata("mesaj","Resim Galeriye Başarıyla Yüklendi"); 
			   //yükleme bittikten sonra tekrar aynı forma gelmesi için galeri yukle ve parametre id yi de yazmalıyız.
			   redirect(base_url()."admin/menu/galeri_yukle/".$id);
					
						
            }						
		
	}	
	
		public function galeri_sil($id,$resim_id)
	{
			    $this->db->query("DELETE FROM resim WHERE resim_id=$resim_id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			  	 redirect(base_url()."admin/menu/galeri_yukle/".$id);
	}





	


}
