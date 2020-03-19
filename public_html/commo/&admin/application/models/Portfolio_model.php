<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('portfolio.*, kategori_portfolio.nama_kategori_portfolio, users.nama');
		$this->db->from('portfolio');
		// Join
		$this->db->join('kategori_portfolio','kategori_portfolio.id_kategori_portfolio = portfolio.id_kategori_portfolio', 'LEFT');
		$this->db->join('users','users.id_user = portfolio.id_user','LEFT');
		// End join
		$this->db->order_by('id_portfolio','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read
	public function read($slug_portfolio) {
		$this->db->select('portfolio.*, kategori_portfolio.nama_kategori_portfolio, users.nama');
		$this->db->from('portfolio');
		// Join
		$this->db->join('kategori_portfolio','kategori_portfolio.id_kategori_portfolio = portfolio.id_kategori_portfolio', 'LEFT');
		$this->db->join('users','users.id_user = portfolio.id_user','LEFT');
		// End join
		$this->db->where('slug_portfolio',$slug_portfolio);
		$this->db->order_by('id_portfolio','DESC');
		$query = $this->db->get();
		return $query->row();
	}
	
	//Kategori
	public function kategori($id_kategori_portfolio) {
		$this->db->select('portfolio.*, kategori_portfolio.nama_kategori_portfolio, users.nama');
		$this->db->from('portfolio');
		// Join
		$this->db->join('kategori_portfolio','kategori_portfolio.id_kategori_portfolio = portfolio.id_kategori_portfolio', 'LEFT');
		$this->db->join('users','users.id_user = portfolio.id_user','LEFT');
		// End join
		$this->db->where('portfolio.id_kategori_portfolio',$id_kategori_portfolio);
		$this->db->order_by('id_portfolio','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Home
	public function home() {
		$this->db->select('portfolio.*, kategori_portfolio.nama_kategori_portfolio, users.nama');
		$this->db->from('portfolio');
		// Join
		$this->db->join('kategori_portfolio','kategori_portfolio.id_kategori_portfolio = portfolio.id_kategori_portfolio', 'LEFT');
		$this->db->join('users','users.id_user = portfolio.id_user','LEFT');
		// End join
		$this->db->where('portfolio.status_portfolio','Publish');
		$this->db->order_by('id_portfolio','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail perportfolio
	public function detail($id_portfolio){
		$query = $this->db->get_where('portfolio',array('id_portfolio'  => $id_portfolio));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('portfolio',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id_portfolio',$data['id_portfolio']);
		$this->db->update('portfolio',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_portfolio',$data['id_portfolio']);
		$this->db->delete('portfolio',$data);
	}
}