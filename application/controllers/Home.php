<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
        {
                   parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
        }
 
	
	public function index()
	{

		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();


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

		$query=$this->db->query("SELECT * FROM footer order by footer_adi asc");
		$data["footercek"]=$query->result();


		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["v"]=$query->result();

		


		$this->load->view('_header',$data);
	
		$this->load->view('_content',$data);
		$this->load->view('_footer',$data);
	}





	





}
