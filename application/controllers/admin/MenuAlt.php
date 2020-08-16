<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuAlt extends CI_Controller {

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

			$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Alt Yönetimi || ";
		$data["menu"]="Yeni ";


	
		$this->load->view('admin/menualt_listele',$data); 
		
	}


public function li($id)
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

			$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id where menu_alt.parent_id=$id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where parent_id=$id");
		$data["menualt_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Alt Yönetimi || ";
		$data["menu"]="Yeni ";



	
		$this->load->view('admin/menualt_listele',$data);
		
	}










    public function ekle($id)
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

				$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id where menu_alt.parent_id=$id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where parent_id=$id");
		$data["menualt_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Alt Yönetimi || ";
		$data["menu"]="Yeni ";


		
	
		$this->load->view('admin/menualt_ekle',$data);
		
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
		$data["sayfa"]="Menü Alt Yönetimi || ";
		$data["menu"]="Yeni ";



	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('menu_alt_resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\menualt_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
			    

			     $data=array(

		 			
                        'menu_alt_adi'=>$this->input->post('menu_alt_adi'),
                        'parent_id'=>$this->input->post('parent_id'),
                      
                       
						'menu_alt_resim'=>$upload_data["file_name"],
						'menu_alt_aciklama'=>$this->input->post('menu_alt_aciklama'),
						
						
							
                       
                 );

              
             	$this->db->insert("menu_alt",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/menualt/");

	}
	


	public function update_data($table,$data,$id){
		$this->db->where('menu_alt_id',$id);
		$this->db->update($table,$data);
		return true;
		
	}

	public function sil($id)
	{
		 $query=$this->db->query("SELECT menu_alt_id FROM resim WHERE menu_alt_id=$id");
		 $data["veri"]=$query->result(); 
		
		if($data["veri"]!=null){
			     $this->db->query("DELETE menu_alt,resim FROM menu_alt INNER JOIN resim ON menu_alt.menu_alt_id=resim.menu_alt_id WHERE menu_alt.menu_alt_id=$id");
		}
		else{
       
            $this->db->query("DELETE FROM menu_alt WHERE menu_alt_id=$id");
		}
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/menualt");
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


		$query=$this->db->query("SELECT * FROM menu_alt WHERE menu_alt_id=$id");
				$data["veri"]=$query->result();

				$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Alt Yönetimi || ";
		$data["menu"]="Yeni ";

	
		$this->load->view('admin/menualt_duzenle',$data);
		
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

			$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Alt Yönetimi || ";
		$data["menu"]="Yeni ";

			
		 $data=array(

                       
                       'menu_alt_adi'=>$this->input->post('menu_alt_adi'),
                       'parent_id'=>$this->input->post('parent_id'),
                     
                      
					
					   'menu_alt_aciklama'=>$this->input->post('menu_alt_aciklama'),
						
                       
                       
                 );
				
			   $this->update_data("menu_alt",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/menualt");

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
        	
            $query=$this->db->query("SELECT * FROM menu_alt WHERE menu_alt_id=$id");
			$data["veri"]=$query->result();    
            $data["id"]=$id;
                
            $this->load->view('admin/resim_yukle',$data);

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
              		'menu_alt_resim'=>$upload_data["file_name"]
              	);
             	
              	$this->update_data("menu_alt",$data,$id);

              	redirect(base_url().'admin/menualt');

			
						
            }						
		
	}	



		


              
       
	


}
