<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	protected $CI;
	
	public function __construct() {

	    parent::__construct();

	    $this->CI =& get_instance();

	    $this->CI->load->helper(['form', 'url', 'security']);
	    $this->CI->load->library(['form_validation', 'encryption','session']);
	    $this->CI->load->model('Model_login');

	}
	
	public function index()
	{
		session_destroy();	// Finaliza sessão do usuário ao acessar tela de login
		//$this->CI->load->view("login");
		redirect("login.html");die;
	}

	function logon() {

		if (isset($this->input->get('usuario')) && !empty($this->input->get('usuario'))) {
			$usuario = $this->input->get('usuario');
		}
		if (isset($this->input->get('senha')) && !empty($this->input->get('senha'))) {
			$senha = $this->input->get('senha');
		}

		if (isset($usuario) && isset($senha)) {
				
			// Acessa model para realizar busca no banco
			if( $this->Model_login->getUsuarioBanco($usuario, $senha) ){
				return true;
				redirect("home.php");die;
			}else{
				return false;
				redirect("login.html");die;
			}

		}

		redirect("login.html");die;
		return false;
	}
}

?>