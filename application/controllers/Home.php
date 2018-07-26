<?php 
	class home extends CI_Controller
	{
            public function __construct() {
                parent::__construct();
                $this->load->library('form_validation');
                $this->load->model('search_model');
            }
                    
            public function index(){
                $this->load->view('templates/header');
                $this->load->view('pages/home');
                $this->load->view('templates/footer');
            }
            public function pencarian_lv1(){
            
            $keyword = $this->input->post('search');

            $data['results'] = $this->search_model->get_results($keyword);
            
		$this->load->view('templates/header');
		$this->load->view('admin/hasil_pencarian', $data);
		$this->load->view('templates/footer');
            }
            public function pencarian_lv2(){

            $keyword = $this->input->post('search');
            $data['results'] = $this->search_model->get_results($keyword);

		$this->load->view('templates/header');
		$this->load->view('pages/hasil_pencarian', $data);
		$this->load->view('templates/footer');
            }

            public function lihat_data(){
            $this->load->model('M_member');
            $data['kosakata'] = $this->M_member->select_all()->result();
            $this->load->view('templates/header');
            $this->load->view('pages/v_lihat_data', $data);
            $this->load->view('templates/footer');
        }
	}