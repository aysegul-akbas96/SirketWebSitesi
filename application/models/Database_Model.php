<?php

class Database_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		
	}
	public function login($tablo,$yonetici_kullaniciadi,$yonetici_sifre)
	{
		$this->db->select('*');
        $this->db->from($tablo);
        $this->db->where('yonetici_kullaniciadi', $yonetici_kullaniciadi);
        $this->db->where('yonetici_sifre', $yonetici_sifre);
        $this->db->limit(1);
         
        
        $query = $this->db->get(); //Verileri getir
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
	}

		public function insert_data($table,$data){
		$this->db->insert($table,$data);
		return true;
		
	}
	
		public function update_data($table,$data,$id){
		$this->db->where('Id',$id);
		$this->db->update($table,$data);
		return true;
		
	}


	public function menuisim()
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


		  return $query->result();
	}


	
}
?>