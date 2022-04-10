<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{

	$data['nama'] = 'Muhammad Aqil Sadik';
	$data['alamat'] = 'Pekanbaru,Riau';
	$data['email'] = 'aqilsadik12@gmail.com';
	$data['hobi'] = ['nangis','nonton','game'];
		$this->load->view('dashboard',$data);
	}
	public function about()
	{
		echo "Hai,ini halaman about ya qil";
	}

}
