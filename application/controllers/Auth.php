<?php 

class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
    }

    public function index(){
        
    $this->load->view('template/header_login');
    $this->load->view('login/login');
    $this->load->view('template/footer');
        
    }

    public function login()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        $username= $this->input->post('username');
        $password= $this->input->post('password');

        $user = $this->auth->getUser($username,$password);

        var_dump($user);

        if ($user) {
            redirect('');
        } else {
            redirect('');
        }
    } 

}