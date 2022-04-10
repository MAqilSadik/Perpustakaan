<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
    }

    public function index()
    {
        $data['list'] = $this->usermodel->get_user();
        $this->load->view('user/user', $data);
    }

      public function add()
    {
        $this->load->view('user/add');
    }

     public function insert()
    {
        $foto = $_FILES['foto']['name'];
        $config = [
            'upload_path' => "./assets/images/",
            'allowed_types' => "gif|jpg|png|jpng|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');
        if ($this->usermodel->insert($this->input->post(), $foto)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect('user');
         }
    }

    public function delete($id)
    {
        if($this->usermodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect('user');

        }
    }
}