<?php

	class crud extends CI_Model
	{
		function tampil_data(){
            $this->db->select('');
            $this->db->from('kosakata');
            $this->db->order_by('kata', 'ASC');
                                
			return $this->db->get();
		}
		
		function input_data($data, $table){
			$this->db->insert($table, $data);
		}

		function hapus($id){
			$this->db->where('id', $id);
			$this->db->delete('kosakata');     
		}

                
                function select_by_id($id){
                    $this->db->select('*');
                    $this->db->from('kosakata');
                    $this->db->where('id', $id);
                    
                    return $this->db->get();
                }
                
                function update_data($id, $data, $table){
                    $this->db->where($id);
                    $this->db->update($table, $data);
                }
	}


