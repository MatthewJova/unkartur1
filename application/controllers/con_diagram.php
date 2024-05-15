<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class con_diagram extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('m_diagram');
    }
	
    public function index() {
		check_not_login();
        $this->load->model('m_diagram'); // Load the model
        $data['hasil'] = $this->m_diagram->jum_agama();
		$this->load->view('header');
		$this->load->view('menu');
        $this->load->view('diagram', $data);
    }

	
	public function diagram_line()
    {
		check_not_login();
		$this->load->model('m_diagram'); // Load the model
        $data['hasil'] = $this->m_diagram->tgl_lahir();
		$this->load->view('header');
		$this->load->view('menu');
        $this->load->view('diagram2', $data);
    }
	
	public function diagram_pie()
    {
		check_not_login();
		$this->load->model('m_diagram'); // Load the model
        $data['hasil'] = $this->m_diagram->jenis_kelamin();
		$this->load->view('header');
		$this->load->view('menu');
        $this->load->view('diagram3', $data);
    }

    public function diagram_bar() {
		check_not_login();
        $this->load->model('m_diagram'); // Load the model
        $data['hasil'] = $this->m_diagram->prodi();
		$this->load->view('header');
		$this->load->view('menu');
        $this->load->view('diagram4', $data);
    }
}
