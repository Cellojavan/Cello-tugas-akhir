<?php 

class Tutorial extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_blog');


    }


    public function index(){
        $data['judul'] = "ADMIN";
        $this->load->library('pagination');

        if($this->input->post('keywoardd')){
            $data['keywoard'] = $this->input->post('keywoardd');
        }else{
            $data['keywoard'] = null;
        }
        $config['base_url'] = 'http://localhost/ci/blog/index';
        $config['total_rows'] = $this->M_blog->countData();
        $config['per_page'] = 2;
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center mt-5">';
        $config['full_tag_close'] = '</ul></nav>';
        
       $config['first_link'] = 'First';
       $config['first_tag_open'] = '<li class="page-item" aria-current="page">';
       $config['first_tag_close'] = '</li>';
       
       $config['last_link'] = 'Last';
       $config['last_tag_open'] = '<li class="page-item" aria-current="page">';
       $config['last_tag_close'] = '</li>';

       $config['next_link'] = "&raquo";
       $config['next_tag_open'] = '<li class="page-item" aria-current="page">';
       $config['next_tag_close'] = '</li>';
       
       $config['prev_link'] = "&laquo";
       $config['prev_tag_open'] = '<li class="page-item" aria-current="page">';
       $config['prev_tag_close'] = '</li>';


        $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link" href="#targetku">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item" aria-current="page" href="#cari">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $data['start'] = $this->uri->segment(3);

        $this->pagination->initialize($config);

        $data['gambar'] = $this->M_blog->getAllGambar($config['per_page'], $data['start'], $data['keywoard']);
        $this->load->view('templates/header', $data);
        $this->load->view('blog/index', $data);
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
    public function edit(){
        
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            $judul = $this->input->post("judul");
            $konten = $this->input->post("konten");
            $id = $this->input->post("id");

            $data = array(
                'judul' => $judul,
                'content' => $konten,
            );

            $this->db->where('id', $id);
            $this->db->update('data', $data);
            $this->session->set_flashdata('success', 'Diubah');
            redirect(base_url());
        }
        else
        {
            $gambar = $this->upload->data('file_name');
            $judul = $this->input->post("judul");
            $konten = $this->input->post("konten");
            $id = $this->input->post("id");

            $data = array(
                'judul' => $judul,
                'gambar' => $gambar,
                'content' => $konten,
            );

            $cek_foto = $this->db->get_where('data', ["id" => $id])->row();
            unlink('gambar/' . $cek_foto->gambar);
            $this->db->where('id', $id);
            $this->db->update('data', $data);
            $this->session->set_flashdata('success', 'Diubah');
            redirect(base_url());


        }
    }

    public function hapus($id){
        $cek_foto = $this->db->get_where('data', ["id" => $id])->row();
        unlink('gambar/' . $cek_foto->gambar);
        $this->db->delete('data', ["id" => $id]);
        $this->session->set_flashdata('danger', 'Dihapus');
        redirect(base_url());    
    }
}

?>