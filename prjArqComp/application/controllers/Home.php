<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	protected $CI;
	
	public function __construct() {

	    parent::__construct();

	    $this->CI =& get_instance();

	    $this->CI->load->library(['encryption','session']);
	    $this->CI->load->helper(['url', 'security']);
	    $this->CI->load->model('Model_login');

	}
	
	public function index() {

		$this->CI->load->view("home");
	}

	// Funções de redirecionamento
	public function home() {

		// $this->CI->load->view("home");
		redirect('home');die;
	}
	
	public function cadastro_pacientes() {

		// $this->CI->load->view("cadastro_pacientes");
		redirect('cadastro_pacientes');die;
	}
}

?>