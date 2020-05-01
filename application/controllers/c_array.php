<?php
class c_array extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("json_model");
    }
    public function index(){
        $this->load->view("input_array");
    }
    public function data_submitted(){
        $data=array(
            'mahasiswa_name' => $this->input->post('mhs_name'),
            'mahasiswa_email' => $this->input->post('mhs_email'),
            'mahasiswa_class' => $this->input->post('select'),
            'mahasiswa_address' => $this->input->post('address'),
        );
        $json_data['mhs_data']= json_encode($data);
        
        $return = $this->json_model->insert_json_in_db($json_data);
        if ($return == true){
            $data['result_msg']= 'json data successfully inserted into database !';
        } else {
            $data['result_msg']= 'please configure your database correctly';
        }
        $this->load->view("input_array", $data);
    }
    
    public function tampil_query()
    {
    	$data['row'] =$this->db->get('mahasiswa_info')->result();
    	$this->load->view('view_query', $data);
    }
}

?>