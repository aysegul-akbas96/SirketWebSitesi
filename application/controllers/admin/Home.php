<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	  function __construct()
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

            $query=$this->db->query("SELECT * FROM menu where menu_id=6");
			$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu_alt.parent_id=menu.parent_id");
		$data["menualt_ad"]=$query->result();

	
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Anasayfa || ";
		$data["menu"]="anasayfa ";
				







		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar',$data);
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
	}




	public function alt_galeri_yukle($id)
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


            $query=$this->db->query("SELECT * FROM resim WHERE menu_alt_id=$id");
			$data["veriler"]=$query->result();    
            $data["id"]=$id;

            $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Resim Yükle ||";
		$data["menu"]="Resim Yükle ";
	
				



                
            $this->load->view('admin/alt_galeri_yukle',$data);

        }

     
		  public function alt_galeri_kaydet($id)
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
		$data["sayfa"]="Resim Yükle || ";
		$data["menu"]="Resim Yükle ";
	
	
				


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
              	$this->load->view('admin/home/alt_galeri_yukle'.$id);
                    
            }
        else
            {
            	 $upload_data=$this->upload->data();
              	$data=array(
              		'menu_alt_id'=>$id,
              		'resim'=>$upload_data["file_name"]
              	);
             	 $this->db->insert('resim',$data);

			   $this->session->set_flashdata("mesaj","Resim Galeriye Başarıyla Yüklendi"); 
			   //yükleme bittikten sonra tekrar aynı forma gelmesi için galeri yukle ve parametre id yi de yazmalıyız.
			   redirect(base_url()."admin/home/alt_galeri_yukle/".$id);
					
						
            }						
		
	}	
	
		public function alt_galeri_sil($id,$resim_id)
	{
			    $this->db->query("DELETE FROM resim WHERE resim_id=$resim_id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			  	 redirect(base_url()."admin/home/alt_galeri_yukle/".$id);
	}


public function alt_resim_yukle($id)
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


            $query=$this->db->query("SELECT * FROM menu_alt WHERE menu_alt_id=$id");
			$data["veri"]=$query->result();    
            $data["id"]=$id;
                

              $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Resim Yükle || ";
		$data["menu"]="Resim Yükle ";
	
	
				

            $this->load->view('admin/alt_resim_yukle',$data);

        }
     
		  public function alt_resim_kaydet($id)
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
		$data["sayfa"]="Resim Yükle || ";
		$data["menu"]="Resim Yükle ";
	
	
				


		$data["id"]=$id;
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
              	$this->load->view('admin\alt_resim_yukle',$data);
                    
            }
        else
            {
            	
			       $upload_data=$this->upload->data();
              	$data=array(
              		'menu_alt_resim'=>$upload_data["file_name"]
              	);
             	
              	$this->update_data("menu_alt",$data,$id);

             redirect(base_url()."admin/home/alt_resim_yukle/".$id);

	
						
            }						
		
	}	

	public function update_data($table,$data,$id){
		$this->db->where('menu_alt_id',$id);
		$this->db->update($table,$data);
		return true;
		
	}



}
