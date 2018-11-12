<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_pacientes extends CI_Controller {

	protected $CI;
	
	public function __construct() {

	    parent::__construct();

	    $this->CI =& get_instance();
	    $this->CI->load->model('Model_cadastro_paciente');

	}
	
	public function index() {

		$pacientes = $this->Model_cadastro_paciente->getPacientesBanco();
		$dados = array('pacientes' => $pacientes);
		// var_dump($pacientes);die;
		$this->CI->load->view("cadastro_pacientes", $dados);
	    
	}

	// Adicionar paciente
	public function adiciona_paciente() {

		if ($this->input->post('paciente') && !empty($this->input->post('paciente'))) {
			$paciente = $this->input->post('paciente');
		}
		if ($this->input->post('cnpj') && !empty($this->input->post('cnpj'))) {
			$cnpj = $this->input->post('cnpj');
		}
		if ($this->input->post('data_nasc') && !empty($this->input->post('data_nasc'))) {
			$data_nasc = $this->input->post('data_nasc');
		}
		if ($this->input->post('plano_saude') && !empty($this->input->post('plano_saude'))) {
			$plano_saude = $this->input->post('plano_saude');
		}
		
		if (isset($cnpj) && isset($paciente)) {

			// Acessa model para realizar busca no banco
			if( $this->Model_cadastro_paciente->setPacienteBanco($paciente, $cnpj, $data_nasc, $plano_saude) ){

				// redirect("cadastro_pacientes");die;
			}else{

				// redirect("cadastro_pacientes");die;
			}
		}

		redirect("cadastro_pacientes");die;
	}

	// Excluir pacientes
	public function exclui_paciente() {

		if ($this->input->post('codigo') && !empty($this->input->post('codigo'))) {
			$codigo = $this->input->post('codigo');
		}
		
		if (isset($codigo)) {

			// Acessa model para realizar busca no banco
			if( $this->Model_cadastro_paciente->delPacienteBanco($codigo) ){

				// redirect("cadastro_pacientes");die;
			}else{

				// redirect("cadastro_pacientes");die;
			}
		}

	}
	
	// Alterar pacientes
	public function altera_paciente() {

		if ($this->input->post('codigo') && !empty($this->input->post('codigo'))) {
			$codigo = $this->input->post('codigo');
		}
		// if ($this->input->post('nome') && !empty($this->input->post('nome'))) {
		if ($this->input->post('alt_paciente') && !empty($this->input->post('alt_paciente'))) {
			$nome = $this->input->post('alt_paciente');
		}
		if ($this->input->post('cnpj') && !empty($this->input->post('cnpj'))) {
			$cnpj = $this->input->post('cnpj');
		}
		if ($this->input->post('data_nascimento') && !empty($this->input->post('data_nascimento'))) {
			$data_nascimento = $this->input->post('data_nascimento');
		}
		if ($this->input->post('plano_saude') && !empty($this->input->post('plano_saude'))) {
			$plano_saude = $this->input->post('plano_saude');
		}
		
var_dump($codigo);
var_dump($nome);
var_dump($cnpj);
var_dump($data_nascimento);
var_dump($plano_saude);
die;
return;

		if (isset($codigo) && isset($nome) && isset($cnpj) && isset($data_nascimento) && isset($plano_saude)) {
			// Acessa model para realizar busca no banco
			if( $this->Model_cadastro_paciente->altPacienteBanco($codigo, $nome, $cnpj, $data_nascimento, $plano_saude) ){

				// redirect("cadastro_pacientes");die;
			}else{

				// redirect("cadastro_pacientes");die;
			}
		}
		return true;
	}
	
}

?>