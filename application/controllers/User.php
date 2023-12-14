<?php 

class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_blog');


    }


    public function index(){
        $data['judul'] = "USER";
        $data['gambar'] = $this->M_blog->getAllGambar();
        $this->load->view('templates/header', $data);
        $this->load->view('blog/user', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambah(){
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            echo "Gagal tambah";
        }
        else
        {
            $gambar = $this->upload->data('file_name');
            $judul = $this->input->post("judul");
            $konten = $this->input->post("konten");

            $data = array(
                'judul' => $judul,
                'gambar' => $gambar,
                'content' => $konten,
            );

            $this->db->insert('data', $data);
            $this->session->set_flashdata('success', 'Ditambahkan');
            redirect(base_url());


        }
    }
}

?>