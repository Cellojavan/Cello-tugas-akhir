<?php

class M_blog extends CI_model {

    public function getAllGambar($limit, $start, $keywoard = null){
        if($keywoard){
            $this->db->like('judul', $keywoard);
        }
        return $this->db->get('data', $limit, $start)->result_array();;
    }
    public function getAllGambar2(){
        return $this->db->get('data')->result_array();;
    }
    public function countData(){
        $this->db->get('data');
        
        return $this->db->get('data')->num_rows();
    }
}

?>