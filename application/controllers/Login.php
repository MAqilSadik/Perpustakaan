<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('usermodel');
    }

    public function index()
    {
        $cookie = get_cookie('tigaserangkai');
        if ($this->session->userdata('nama') != '') {
            redirect(base_url('dashboard'));
        } else if ($cookie != '') {
            $sesi = $this->Usermodel->get_detail_by_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect('dashboard');
        }

        $this->load->view('login');
    }

    public function auth()
    {
        $email = $this->input->post('email');
        $pwd = $this->input->post('password');
        echo $email;
        echo $pwd;
        $auth = $this->usermodel->auth($email, $pwd);
        if ($auth) {
            $sesi = $this->usermodel->get_detail($email);
            redirect('dashboard');
        }
       
    }

    public function logout()
    {
        delete_cookie('tigaserangkai');
        $this->session->sess_destroy();
        redirect('login');
    }

}