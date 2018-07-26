<?php

    class login extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            $this->load->model('user_model');
        }


        public function index(){

        }
        
        public function cek_login(){
            $data = array(
                'username' => $this->input->post('username', TRUE),
                'password' => md5($this->input->post('password', TRUE))
            );
            
            $hasil = $this->user_model->cek_user($data);
            
            if($hasil->num_rows() == 1){
                foreach($hasil->result() as $sess){
                    $sess_data['logged_in'] = 'Sudah login';
                    $sess_data['uid'] = $sess->uid;
                    $sess_data['username'] = $sess->username;
                    $sess_data['level'] = $sess->level;
                    $this->session->set_userdata($sess_data);
                }
                if($this->session->userdata('level') == 'admin'){
                    redirect('Admin');
                }
                elseif($this->session->userdata('level') == 'member'){
                    redirect('member');
                }
            }
            else{
                redirect('Home#loginMsg');
            }
        }
    }

