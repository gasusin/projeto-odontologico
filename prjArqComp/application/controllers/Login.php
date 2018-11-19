<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	protected $CI;
	
	public function __construct() {

	    parent::__construct();

	    $this->CI =& get_instance();

	    $this->CI->load->library(['encryption','session']);
	    $this->CI->load->helper(['url', 'security']);
	    $this->CI->load->model('Model_login');

	}
	
	public function index()
	{
		session_destroy();	// Finaliza sessão do usuário ao acessar tela de login
		$this->CI->load->view("login");
	}

	function logon() {

		if ($this->input->get('usuario') && !empty($this->input->get('usuario'))) {
			$usuario = $this->input->get('usuario');
		}
		if ($this->input->get('senha') && !empty($this->input->get('senha'))) {
			$senha = $this->input->get('senha');
		}

		if (isset($usuario) && isset($senha)) {
				
			// Acessa model para realizar busca no banco
			if( $this->Model_login->getUsuarioBanco($usuario, $senha) ){
				redirect("Home");die;
			}else{
				redirect("Login");die;
			}

		}

		redirect("Login");die;
	}

	function logout() {

		redirect("Login");die;
	}
}

?>