<?php
class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('data');
                $this->load->helper('url');
	}

	function index(){
	    $data['content']='awal_posyandu';
	    $this->load->view('admin/index_posyandu',$data);
	}
	function tambah(){
	    $data['kader'] = $this->data->tampil_data()->result();
		$data['content']='tampilan_kader';
		$this->load->view('xrossbone/index',$data);
	}
	function input(){
		$data['content']='input_data';
		$this->load->view('xrossbone/index',$data);
	}
	
	function tambah_data(){
		$id_kader = $this->input->post('id_kader');
		$nama_kader = $this->input->post('nama_kader');
		$alamat_kader = $this->input->post('alamat_kader');
 
		$data = array(
			'id_kader' => $id_kader,
			'nama_kader' => $nama_kader,
			'alamat_kader' => $alamat_kader
			);
		$this->data->input_data($data,'kader');
		redirect('crud/tambah');
	}

	function hapus($id_kader){
		$where = array('id_kader' => $id_kader);
		$this->data->hapus_data($where,'kader');
		redirect('crud/tambah');
	}

	function edit($id_kader){
		$where = array('id_kader' => $id_kader);
		$data['kader'] = $this->data->edit_data($where,'kader')->result();
		$this->load->view('edit_data',$data);
	}
	function update(){
		$id_kader = $this->input->post('id_kader');
		$nama_kader = $this->input->post('nama_kader');
		$alamat_kader = $this->input->post('alamat_kader');
 
	$data = array(
		'id_kader' => $id_kader,
		'nama_kader' => $nama_kader,
		'alamat_kader' => $alamat_kader,
	);
 
	$where = array('id_kader' => $id_kader);
 	$this->data->update_data($where,$data,'kader');
	redirect('crud/tambah');
}

}