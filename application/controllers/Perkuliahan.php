<?php

class Perkuliahan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        //$this->load->view("index3");
		$this->load->view('header');
		$this->load->view('menu');
	}
	
	public function SPP()
	{
		$this->load->view("general");
	}
	
	public function KRS()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view("v_krs.php");
		
	}
	
	public function edKRS()
	{
		$this->load->view("editkrs.php");
	}
	
	public function vKRS()
	{
		$this->load->view("data.php");
	}
	
	public function vKHS()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view("v_khs.php");
	}
	
	public function hKRS()
	{
		$this->load->view("projects.php");
	}
	
	public function setuju()
	{
		$this->load->view("setuju.php");
	}
	
	public function krsDosen()
	{
		$this->load->view("krsdosen.php");
	}
}