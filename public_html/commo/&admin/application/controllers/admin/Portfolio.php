<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('portfolio_model');
		$this->load->model('kategori_portfolio_model');
	}
	
	// Index
	public function index() {
		$portfolio = $this->portfolio_model->listing();
		
		$data = array(	'title'		=> 'Data portfolio',
						'portfolio'	=> $portfolio,
						'isi'		=> 'admin/portfolio/list');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Tambah
	public function tambah() {
		$kategori	= $this->kategori_portfolio_model->listing();
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nama_portfolio','Nama portfolio','required|is_unique[portfolio.nama_portfolio]',
			array(	'required'		=> 'Nama portfolio harus diisi',
					'is_unique'		=> 'Nama portfolio: <strong>'.$this->input->post('nama_portfolio').
									   '</strong> sudah ada. Buat nama yang berbeda'));
									   			
// 		$v->set_rules('keterangan','Keterangan portfolio','required',
// 			array(	'required'		=> 'Keterangan portfolio harus diisi'));
		
		if($v->run()) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Tambah portfolio',
						'kategori'	=> $kategori,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/portfolio/tambah');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/image/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 360; // Pixel
			$config['height'] 			= 200; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_user'				=> $this->session->userdata('id'),
							'id_kategori_portfolio'	=> $i->post('id_kategori_portfolio'),
							'slug_portfolio'			=> url_title($i->post('nama_portfolio'),'dash',TRUE),
							'nama_portfolio'			=> $i->post('nama_portfolio'),
							'keterangan'			=> $i->post('keterangan'),
							'jenis_portfolio'				=> $i->post('jenis_portfolio'),
							'status_portfolio'			=> $i->post('status_portfolio'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'tanggal_post'			=> date('Y-m-d H:i:s')
							);
			$this->portfolio_model->tambah($data);
			$this->session->set_flashdata('sukses','Portfolio telah ditambah');
			redirect(base_url('admin/portfolio'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Tambah portfolio',
						'kategori'	=> $kategori,
						'isi'		=> 'admin/portfolio/tambah');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Edit
	public function edit($id_portfolio) {
		$portfolio		= $this->portfolio_model->detail($id_portfolio);
		$kategori	= $this->kategori_portfolio_model->listing();
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nama_portfolio','Nama portfolio','required',
			array(	'required'		=> 'Nama portfolio harus diisi'));
					
// 		$v->set_rules('keterangan','Keterangan portfolio','required',
// 			array(	'required'		=> 'Keterangan portfolio harus diisi'));
		
		if($v->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Edit portfolio',
						'kategori'	=> $kategori,
						'portfolio'	=> $portfolio,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/portfolio/edit');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/image/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 360; // Pixel
			$config['height'] 			= 200; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_portfolio'				=> $id_portfolio,
							'id_user'				=> $this->session->userdata('id'),
							'id_kategori_portfolio'	=> $i->post('id_kategori_portfolio'),
							'slug_portfolio'			=> url_title($i->post('nama_portfolio'),'dash',TRUE),
							'nama_portfolio'			=> $i->post('nama_portfolio'),
							'keterangan'			=> $i->post('keterangan'),
							'jenis_portfolio'				=> $i->post('jenis_portfolio'),
							'status_portfolio'			=> $i->post('status_portfolio'),
							'gambar'				=> $upload_data['uploads']['file_name']
							);
			$this->portfolio_model->edit($data);
			$this->session->set_flashdata('sukses','Portfolio telah diedit');
			redirect(base_url('admin/portfolio'));
		}}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_portfolio'				=> $id_portfolio,
							'id_user'				=> $this->session->userdata('id'),
							'id_kategori_portfolio'	=> $i->post('id_kategori_portfolio'),
							'slug_portfolio'			=> url_title($i->post('nama_portfolio'),'dash',TRUE),
							'nama_portfolio'			=> $i->post('nama_portfolio'),
							'keterangan'			=> $i->post('keterangan'),
							'jenis_portfolio'				=> $i->post('jenis_portfolio'),
							'status_portfolio'			=> $i->post('status_portfolio')									
							);
			$this->portfolio_model->edit($data);
			$this->session->set_flashdata('sukses','Portfolio telah diedit');
			redirect(base_url('admin/portfolio'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Edit portfolio',
						'kategori'	=> $kategori,
						'portfolio'	=> $portfolio,
						'isi'		=> 'admin/portfolio/edit'); 
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete
	public function delete($id_portfolio) {
		$this->simple_login->cek_login();
		$data = array('id_portfolio'	=> $id_portfolio);
		$this->portfolio_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/portfolio'));		
	}
}