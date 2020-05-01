<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_karang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("data");
        $this->load->library('form_validation');
        if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
    }
    
    public function index()
    {
        $user_id = $this->session->userdata('ses_username');
        if($this->session->userdata('akses')=='2'){
            $data["karang_taruna"] = $this->data->getAllByUsername($user_id);
            $this->load->view('admin/user_view',$data);
        }else{
                $data["karang_taruna"] = $this->data->getAll();
                $this->load->view("admin/karang_taruna", $data);
        }
    }
    
    public function add()
    {
        $karang = $this->data;
        $validation = $this->form_validation;
        $validation->set_rules($karang->rules());
        
        if ($validation->run()) {
            $karang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $this->load->view("admin/new_form");
    }
    
    public function download($id){
        $fileinfo = $this->data->download($id);
        $file = 'upload/file/'.$fileinfo['proposal'];
        force_download($file, NULL);
    }
    
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/crud_karang/');
        
        $karang = $this->data;
        $validation = $this->form_validation;
        $validation->set_rules($karang->rules());
        
        if ($validation->run()) {
            $karang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["karang_taruna"] = $karang->getById($id);
        if (!$data["karang_taruna"]) show_404();
        
        $this->load->view("admin/edit_form", $data);
    }
    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->data->delete($id)) {
            redirect(site_url('admin/crud_karang'));
        }
    }
}
