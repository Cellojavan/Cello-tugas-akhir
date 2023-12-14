<?php 

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_login');


    }

    public function index(){

        $data['judul'] = 'Log In';
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE){

            $this->load->view('template/header',$data);
            $this->load->view('login/index');
            $this->load->view('template/footer');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->M_login->cekUser($username,$password);
            if($user->num_rows() == 1){
                foreach($user->result_array() as $row){
                $data =[
                    "username" => $row["username"]
                ];
                $this->session->set_userdata($data);
                if($row['activation'] == 1){
                    $this->session->set_flashdata("error", "User Belum Activated");
                    redirect(base_url());
                }else{
                    redirect(base_url());
                }
            }
                
            }else{
                echo "error";
            }

        }
    }
    public function register(){
        $data['judul'] = 'Register';
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confrim Password', 'required|matches[password]');
        if($this->form_validation->run() == FALSE){
            $this->load->view('template/header',$data);
            $this->load->view('login/register');
            $this->load->view('template/footer');
        }else{
                $email = $this->input->post('email');
                $string = time().$email;
                $hash_string = hash('sha256', $string);
                $currentDate = date('Y-m-d H:i');
                $hash_expry = date('Y-m-d H:i',strtotime($currentDate. '1 days'));
                
                
                $email = $this->input->post('email');
                $resetLink = base_url().'login/activation?hash='.$hash_string;
                $message = "<p> Your Activation Email Link is here:</p>".$resetLink;
                $subject = "Activation Email Link";
                $sentStatus = $this->sendEmail($email,$subject,$message);
                if($sentStatus == TRUE){
                    $this->M_login->register($hash_string,$hash_expry);
                    $this->session->set_flashdata('success', 'Email Sending Success');
                    redirect(base_url('login'));
                }else{
                    $this->session->set_flashdata("success", "Email Sending Error");
                    redirect(base_url('login'));
                }
            
        }
        
    }

    public function sendEmail($email,$subject,$message){

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',

            'smtp_port' => 465,
            'smtp_user' => 'webparking101@gmail.com',
            'smtp_pass' => 'gixeirzipqsnecmy',

            'mailtype' => 'html',
            'charset' => 'UTF-8',
            'newline' => "\r\n",
            'wordwrap' => TRUE
        ];

        $this->load->library('email', $config);
        $this->email->from('noreply');
        $this->email->to($email);
        $this->email->subject($subject);
        
        $this->email->message($message);
        if($this->email->send()){

            return true;
        
        }else{
        
            return false;
        
        }
    }

    public function activation(){

        if($this->input->get("hash")){

            $hash = $this->input->get("hash");
            $data["hash"] = $hash;
            $data['judul'] = "Reset Password";
            $getHashDetails = $this->M_login->getHashDetails($hash);
            if($getHashDetails != false){

                $hash_expry = $getHashDetails->hash_expry;
                $currentDate = date('Y-m-d H:i');
                if($currentDate < $hash_expry){

                    $data = [
                        'hash_key' => null,
                        'hash_expry' => null,
                        'activation' => '2'
                    ];
                    $this->M_login->activation($hash, $data);
                    $this->session->set_flashdata('success', 'User Activation Success');
                    redirect(base_url("login"));

                }else{

                    $this->session->set_flashdata('error', 'Link is Expired');
                    redirect(base_url("login/forgot"));

                }


            }else{

                echo"Invalid Hash";exit;
            }

        }else{

            redirect(base_url("login/forgot"));
        }
    }

    public function logout(){
        $this->session->unset_userdata("username");
        redirect(base_url('login'));
    }
}

?>