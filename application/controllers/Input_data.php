<?php

	class input_data extends CI_Controller
	{

		public function __construct(){
			parent::__construct();
			$this->load->model('crud');
                        if($this->session->userdata('username')==""){
                            redirect('login');
                        }elseif($this->session->userdata('level')!='admin'){
                            redirect('member/error');
                        }
		}
		
		public function index()
		{ 
			$this->load->view('templates/admin_header');
			$this->load->view('input_data/tambah_data');
			$this->load->view('templates/footer');
		}
		public function tambah_data_aksi(){ 
			$kata = $this->input->post('kata');
			$ket = $this->input->post('keterangan');

			$data = array(
				'kata' => $kata,
				'keterangan' => $ket 
				);
			$this->crud->input_data($data, 'kosakata');

			$this->session->set_flashdata('msg', 'Berhasil manambah data Ke Database');		

			redirect('input_data');
		}

		public function ubah_data()
		{
			$data['kosakata'] = $this->crud->tampil_data()->result();
			$this->load->view('templates/admin_header');
			$this->load->view('input_data/ubah_data', $data);
			$this->load->view('templates/footer');
		}
		public function hapus_data()
		{
			$data['kosakata'] = $this->crud->tampil_data()->result();
			$this->load->view('templates/admin_header');
			$this->load->view('input_data/hapus_data', $data);
			$this->load->view('templates/footer');
		}

		public function hapus($id){
		 	$this->crud->hapus($id);
		 	redirect(site_url('input_data/lihat_data'));
		}
		
		public function lihat_data()
		{
			$data['kosakata'] = $this->crud->tampil_data()->result();
			$this->load->view('templates/admin_header');
			$this->load->view('input_data/lihat_data', $data);
			$this->load->view('templates/footer');
		}
                public function edit_data($id){
                    $data2['edit_kosakata'] = $this->crud->select_by_id($id)->row();
                    $data['kosakata'] = $this->crud->tampil_data()->result();
                    $this->load->view('templates/admin_header');
                    $this->load->view('input_data/form_edit_data2', $data);
                    $this->load->view('input_data/form_edit_data', $data2);
                    $this->load->view('templates/footer');
                }
                public function proses_edit_data(){
                    $id = $this->input->post('id');
                    $kata = $this->input->post('kata');
                    $ket = $this->input->post('keterangan');
                    
                    $data = array(
                        'kata' => $kata,
                        'keterangan' => $ket
                    );
                    
                    $where = array(
                        'id' => $id
                    );
                    
                    $this->crud->update_data($where, $data, 'kosakata');
                    redirect(site_url('input_data/lihat_data'));
                }
	}