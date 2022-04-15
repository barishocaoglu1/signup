<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincont extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginmod');
    }

	/*Formu ekrana basacak olan kod satırı burası*/
	public function index()
	{
		$this->load->view('login');
	}

	/*Burada kayıt işlemi gerçekleştirilecek */
	public function kayit()
	{

	}
}
