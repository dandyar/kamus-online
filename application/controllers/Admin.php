<?php 
    class Admin extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            if($this->session->userdata('username')==""){
                redirect('login');
            }elseif($this->session->userdata('level')!="admin"){
                redirect('member/error');
            }
            $this->load->helper('text');
        }
        
        public function index(){
            $data = array(
                'id' => $this->session->userdata('uid'),
                'nama_pengguna' => $this->session->userdata('username'),
                'lv' => $this->session->userdata('level')
            );
            $this->load->view('templates/admin_header');
            $this->load->view('admin/home', $data);
            $this->load->view('templates/footer');
        }
        public function logout(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('password');
            $this->session->unset_userdata('level');
            session_destroy();
            redirect('home');
        }
        public function error(){
            $this->load->view('admin/error');
        }
        
    }