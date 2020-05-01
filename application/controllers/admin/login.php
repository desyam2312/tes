<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('admin/v_login');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cekuser=$this->login_model->auth_user($username,$password);
 
        if($cekuser->num_rows() > 0){ //jika login sebagai admin
                        $data=$cekuser->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['status']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_username',$data['username']);
                    redirect('admin/page');
                 }elseif($data['status']=='2'){ //akses user
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_username',$data['username']);
                    redirect('admin/page');
                 }}
                 else{
                     echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                     redirect('admin/login/');
                 }
          
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=site_url('admin/overview');
        redirect($url);
    }
 
}