<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
    }
    
	public function index()
	{

        $this->form_validation->set_rules('name', 'Name', 'trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false){

            $data['tittle'] = 'Halaman Login Restoapp';
            $this->load->view('login/index' ,$data);

            
        }else{

            $this->_login();
        }

    }
    
    private function _login(){

        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $name])->row_array();

        if($user) {

            //ada user
            if(password_verify($password, $user['password'])) {
                redirect('dashboard');

            } else {
                
                $this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert" >Password Salah !</div>');
                redirect('auth');
            }

        } else {
            $this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert" >Username Salah !');
            redirect('auth');
        }
    }

    public function logout(){

        $this->session->unset_userdata('name');
        $this->session->set_flashdata('message');
        redirect('auth');
    }
}
