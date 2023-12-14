<?php 

class M_login extends CI_model {

    public function register($hash_string,$hash_expry){
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'hash_key' => $hash_string,
            'hash_expry' => $hash_expry,
            'activation' => '1'
    );
    
    $this->db->insert('user', $data);
    }
    public function cekUser($username,$password){

        $data = [

            "username" => $username,
            "password" => $password,
        ];

        $this->db->select("*");
        $this->db->from("user");
        $this->db->where($data);
        $this->db->limit("1");
        return $this->db->get();

    }

    public function getHashDetails($hash){
        $query = $this->db->query("SELECT * FROM user WHERE hash_key = '$hash'");
        if($query->num_rows() == 1){

            return $query->row();
        
        }else{

            return false;

        }
    }

    public function activation($hash, $data){

        $this->db->where('hash_key',$hash);
        $this->db->update("user",$data);
    }        
}


?>