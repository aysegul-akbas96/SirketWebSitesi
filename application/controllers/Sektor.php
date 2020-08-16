<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sektor extends CI_Controller {

	 public function __construct()
        {
                   parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
        }
 
	
	public function index()
	{ 
		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=1");
		$data["m"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=2");
		$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=3");
		$data["men"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=4");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=5");
		$data["menua"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=6");
		$data["menuab"]=$query->result();



		$query=$this->db->query("SELECT * FROM menu where menu_id=1");
		$data["veriler"]=$query->result();


		$query=$this->db->query("SELECT resim.resim,menu_alt.* FROM menu_alt
INNER JOIN menu ON menu.parent_id = menu_alt.parent_id
INNER JOIN resim ON resim.menu_alt_id = menu_alt.menu_alt_id
where menu_alt.parent_id =0 group by menu_alt.menu_alt_id ");
		$data["menuismi"]=$query->result();


$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();


		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 order by menu_id asc");
		$data["menusorgu"]=$query->result();

		$query=$this->db->query("SELECT * FROM footer order by footer_adi asc");
		$data["footercek"]=$query->result();

$query=$this->db->query("SELECT * FROM resim inner join menu on resim.menu_id=menu.menu_id where menu.menu_id=1 ");
		$data["x"]=$query->result();

		$query=$this->db->query("SELECT resim.resim,menu_alt.* FROM menu_alt
INNER JOIN menu ON menu.parent_id = menu_alt.parent_id
INNER JOIN resim ON resim.menu_alt_id = menu_alt.menu_alt_id
where menu_alt.parent_id =0 group by menu_alt.menu_alt_id");
		$data["ab"]=$query->result();

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["v"]=$query->result();
		$query=$this->db->query("SELECT menu_adi from menu where parent_id=0");
		$data["sayfa"]=$query->result();
		

	
	

	
		$this->load->view('sektor',$data);

		
	}
public function altgetir($id)
	{
		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=1");
		$data["m"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=2");
		$data["me"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=3");
		$data["men"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=4");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=5");
		$data["menua"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=6");
		$data["menuab"]=$query->result();

$query=$this->db->query("SELECT DISTINCT resim.resim FROM resim INNER JOIN menu_alt ON resim.menu_alt_id = menu_alt.menu_alt_id where resim.menu_alt_id=$id limit 1");
		$data["ab"]=$query->result();
	

        $query=$this->db->query("SELECT * FROM menu_alt where menu_alt_id=$id");
		$data["verim"]=$query->result();




		$query=$this->db->query("SELECT * FROM menu_alt inner join menu on menu.parent_id=menu_alt.parent_id where menu_alt.parent_id=0 order by menu_alt_id asc ");
		$data["menuismi"]=$query->result();


         $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();




		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 order by menu_id asc");
		$data["menusorgu"]=$query->result();

		$query=$this->db->query("SELECT * FROM footer order by footer_adi asc");
		$data["footercek"]=$query->result();

$query=$this->db->query("SELECT * FROM resim inner join menu_alt on menu_alt.menu_alt_id=resim.menu_alt_id where menu_alt.menu_alt_id=$id");
		$data["resim"]=$query->result();

$query=$this->db->query("SELECT * FROM sayfa INNER JOIN menu_alt ON sayfa.menu_alt_id = menu_alt.menu_alt_id where sayfa.menu_alt_id=$id order by sayfa.sayfa_id asc");
		$data["cek"]=$query->result();

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["v"]=$query->result();
		$query=$this->db->query("SELECT menu_alt_adi from menu_alt where menu_alt_id=$id");
		$data["sayfa"]=$query->result();



		




			$this->load->view('_header',$data);
			$this->load->view('altsayfalar',$data);
		


}



}
