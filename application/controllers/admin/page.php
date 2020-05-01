<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
  function index(){
      if($this->session->userdata('akses')=='2'){
          $this->load->view('admin/overview_user');
      }else{
          $this->load->view('admin/overview_admin');
      }
  }
 
  function karang_user(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='2'){
      $data["karang_taruna"] = $this->data->getAll();
      $this->load->view('admin/user_view',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
  function admin(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/karang_taruna');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
}