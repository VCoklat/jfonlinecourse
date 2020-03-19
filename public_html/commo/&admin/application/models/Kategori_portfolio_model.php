<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_portfolio_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('kategori_portfolio');
		$this->db->order_by('urutan','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read
	public function read($slug_kategori_portfolio) {
		$this->db->select('*');
		$this->db->from('kategori_portfolio');
		$this->db->where('slug_kategori_portfolio',$slug_kategori_portfolio);
		$this->db->order_by('urutan','ASC');
		$query = $this->db->get();
		return $query->row();
	}
	
	// detail perkategori_portfolio
	public function detail($id_kategori_portfolio){
		$query = $this->db->get_where('kategori_portfolio',array('id_kategori_portfolio'  => $id_kategori_portfolio));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('kategori_portfolio',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id_kategori_portfolio',$data['id_kategori_portfolio']);
		$this->db->update('kategori_portfolio',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_kategori_portfolio',$data['id_kategori_portfolio']);
		$this->db->delete('kategori_portfolio',$data);
	}
}