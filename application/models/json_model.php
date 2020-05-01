<?php
class Json_Model extends CI_Model{
    public function insert_json_in_db($json_data){
        $this->db->insert('mahasiswa_info', $json_data);
        if($this->db->affected_rows()>0){
            return TRUE;
        } else{
            return false;
        }
    }
    
}