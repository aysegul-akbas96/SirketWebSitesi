<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yeni extends CI_Controller {

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

		$query=$this->db->query("SELECT sayfa_id FROM sayfa");
		$data["sayfa"]=$query->result();

       $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();


		$query=$this->db->query("SELECT * FROM menu where menu_durum=1 order by menu_id asc");
		$data["menusorgu"]=$query->result();

		$query=$this->db->query("SELECT * FROM footer order by footer_adi asc");
		$data["footercek"]=$query->result();

	
		
	

	
		$this->load->view('yeni',$data);

		
	}
public function altgetir($id)
	{$query=$this->db->query("SELECT * FROM menu where menu_durum=1 and menu_id=1");
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


        $query=$this->db->query("SELECT * FROM sayfa where sayfa_id=$id");
		$data["verim"]=$query->result();



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


		$query=$this->db->query("SELECT * FROM resim inner join sayfa on sayfa.sayfa_id=resim.sayfa_id where sayfa.sayfa_id=$id order by sayfa.sayfa_id asc");
		$data["sayfa"]=$query->result();


			$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["v"]=$query->result();
		$query=$this->db->query("SELECT sayfa_baslik from sayfa where sayfa_id=$id");
		$data["say"]=$query->result();

		


			$this->load->view('_header',$data);
			$this->load->view('yeni',$data);


}



}
