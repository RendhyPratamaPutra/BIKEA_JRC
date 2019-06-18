<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
    }
    function baru($data,$table){
		$this->db->insert($table,$data);
	}
}