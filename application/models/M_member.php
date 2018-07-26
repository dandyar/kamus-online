<?php

	class M_member extends CI_Model
	{
		function select_all(){
			$this->db->select();
			$this->db->from('kosakata');
			$this->db->order_by('kata', 'ASC');

			return $this->db->get();
		}
	}