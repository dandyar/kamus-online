<?php

    class search_model extends CI_Model{
        
        public function get_results($keyword)
        {
        $this->db->select('*');
        $this->db->from('kosakata');
        $this->db->like('kata',$keyword);

        $query = $this->db->get();

        return $query->result_array();
        }
        
    }

