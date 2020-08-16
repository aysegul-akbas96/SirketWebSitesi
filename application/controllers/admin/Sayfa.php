<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sayfa extends CI_Controller {

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
		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
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
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";




		$this->load->view('admin/sayfa_listele',$data);
		
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
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";



	
		$this->load->view('admin/sayfa_ekle',$data);
		
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


		$query=$this->db->query("SELECT * FROM menu_alt ");
		$data["alt_ad_getir"]=$query->result();



$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";




	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('sayfa_resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\sayfa_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
			    

			     $data=array(

		 			
                        'sayfa_baslik'=>$this->input->post('sayfa_baslik'),
                        'menu_alt_id'=>$this->input->post('menu_alt_id'),
                      
                       
						'sayfa_resim'=>$upload_data["file_name"],
						'sayfa_aciklama'=>$this->input->post('sayfa_aciklama'),
						
						
							
                       
                 );

              
             	$this->db->insert("sayfa",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/sayfa");

	}
	


	public function update_data($table,$data,$id){
		$this->db->where('sayfa_id',$id);
		$this->db->update($table,$data);
		return true;
		
	}

	public function sil($id)
	{
		 $query=$this->db->query("SELECT sayfa_id FROM resim WHERE sayfa_id=$id");
		 $data["veri"]=$query->result(); 
		
		if($data["veri"]!=null){
			     $this->db->query("DELETE sayfa,resim FROM sayfa INNER JOIN resim ON sayfa.sayfa_id=resim.sayfa_id WHERE sayfa.sayfa_id=$id");
		}
		else{
       
            $this->db->query("DELETE FROM sayfa WHERE sayfa_id=$id");
		}
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/sayfa");
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


		$query=$this->db->query("SELECT * FROM sayfa WHERE sayfa_id=$id");
				$data["veri"]=$query->result();


				$query=$this->db->query("SELECT * FROM menu_alt ");
		$data["alt_ad_getir"]=$query->result();


$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";




		$query=$this->db->query("SELECT menu_alt_adi FROM menu_alt inner join sayfa on menu_alt.menu_alt_id=sayfa.menu_alt_id where sayfa.sayfa_id=$id");
		$data["bak"]=$query->result();

	
		$this->load->view('admin/sayfa_duzenle',$data);
		
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


$query=$this->db->query("SELECT * FROM menu_alt ");
		$data["alt_ad_getir"]=$query->result();


		$query=$this->db->query("SELECT menu_alt_adi FROM menu_alt inner join sayfa on menu_alt.menu_alt_id=sayfa.menu_alt_id where sayfa.sayfa_id=$id");
		$data["bak"]=$query->result();



$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";


		 $data=array(

                       
                       'sayfa_baslik'=>$this->input->post('sayfa_baslik'),
                       'menu_alt_id'=>$this->input->post('menu_alt_id'),
                     
                      
					
					   'sayfa_aciklama'=>$this->input->post('sayfa_aciklama'),
						
                       
                       
                 );
				
			   $this->update_data("sayfa",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/sayfa");

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
        	
            $query=$this->db->query("SELECT * FROM sayfa WHERE sayfa_id=$id");
			$data["veri"]=$query->result();    
            $data["id"]=$id;


$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";

                
            $this->load->view('admin/sayfa_resim_yukle',$data);

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
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";

 
			
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
              	$this->load->view('admin\sayfa_resim_yukle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
              		'sayfa_resim'=>$upload_data["file_name"]
              	);
             	
              	$this->update_data("sayfa",$data,$id);

              	redirect(base_url().'admin/sayfa');

			
						
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
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";




            $query=$this->db->query("SELECT * FROM resim WHERE sayfa_id=$id");
			$data["veriler"]=$query->result();    
           $data["id"]=$id;
                
            $this->load->view('admin/sayfa_galeri_yukle',$data);

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
		$data["sayfa"]="Alt Sayfalar Yönetimi || ";
		$data["menu"]="alt sayfalar yönetimi ";





		
		$data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))
            {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin/sayfa/galeri_yukle'.$id);
                    
            }
        else
            {
            	 $upload_data=$this->upload->data();
              	$data=array(
              		'sayfa_id'=>$id,
              		'resim'=>$upload_data["file_name"]
              	);
             	 $this->db->insert('resim',$data);

			   $this->session->set_flashdata("mesaj","Resim Galeriye Başarıyla Yüklendi"); 
			   //yükleme bittikten sonra tekrar aynı forma gelmesi için galeri yukle ve parametre id yi de yazmalıyız.
			   redirect(base_url()."admin/sayfa/galeri_yukle/".$id);
					
						
            }						
		
	}	
	
		public function galeri_sil($id,$resim_id)
	{
			    $this->db->query("DELETE FROM resim WHERE resim_id=$resim_id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			  	 redirect(base_url()."admin/sayfa/galeri_yukle/".$id);
	}




		


              
       
	


}
