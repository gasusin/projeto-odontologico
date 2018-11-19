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

	// Redireciona para tela de inscusão de pacientes
	public function inclui_paciente() {

		$this->CI->load->view("pacientes/inclusao_pacientes");

	}

	// Adicionar paciente
	public function inclusao_paciente() {

		if ($this->input->post('paciente') && !empty($this->input->post('paciente'))) {
			$paciente = $this->input->post('paciente');
		}
		if ($this->input->post('cpf') && !empty($this->input->post('cpf'))) {
			$cpf = $this->input->post('cpf');
		}
		if ($this->input->post('data_nasc') && !empty($this->input->post('data_nasc'))) {
			$data_nasc = $this->input->post('data_nasc');
		}
		if ($this->input->post('plano_saude') && !empty($this->input->post('plano_saude'))) {
			$plano_saude = $this->input->post('plano_saude');
		}
		
		if (isset($cpf) && isset($paciente)) {

			// Acessa model para realizar busca no banco
			if( $this->Model_cadastro_paciente->setPacienteBanco($paciente, $cpf, $data_nasc, $plano_saude) ){

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
	
	// Redireciona para tela de alteração de pacientes
	public function altera_paciente() {
		if ($this->input->post('paciente_cod') && !empty($this->input->post('paciente_cod')) &&
				$this->input->post('paciente_nome') && !empty($this->input->post('paciente_nome')) &&
				$this->input->post('paciente_cpf') && !empty($this->input->post('paciente_cpf')) &&
				$this->input->post('paciente_dt_nasc') && !empty($this->input->post('paciente_dt_nasc')) &&
				$this->input->post('paciente_pl_saude') && !empty($this->input->post('paciente_pl_saude')) ) {

			$dados = array('codigo' => $this->input->post('paciente_cod'),
						'paciente' => $this->input->post('paciente_nome'),
						'cpf' => $this->input->post('paciente_cpf'),
						'dt_nasc' => $this->input->post('paciente_dt_nasc'),
						'plano_saude' => $this->input->post('paciente_pl_saude'));
			
			$this->CI->load->view("pacientes/alteracao_pacientes", $dados);
			
		}

	}

	// Alterar pacientes
	public function alteracao_paciente() {

		if ($this->input->post('alt_codigo') && !empty($this->input->post('alt_codigo'))) {
			$codigo = $this->input->post('alt_codigo');
		}
		// if ($this->input->post('nome') && !empty($this->input->post('nome'))) {
		if ($this->input->post('alt_paciente') && !empty($this->input->post('alt_paciente'))) {
			$nome = $this->input->post('alt_paciente');
		}
		if ($this->input->post('alt_cpf') && !empty($this->input->post('alt_cpf'))) {
			$cpf = $this->input->post('alt_cpf');
		}
		if ($this->input->post('alt_data_nasc') && !empty($this->input->post('alt_data_nasc'))) {
			$data_nascimento = $this->input->post('alt_data_nasc');
		}
		if ($this->input->post('alt_plano_saude') && !empty($this->input->post('alt_plano_saude'))) {
			$plano_saude = $this->input->post('alt_plano_saude');
		}
		
var_dump($codigo);
var_dump($nome);
var_dump($cpf);
var_dump($data_nascimento);
var_dump($plano_saude);
die;

		if (isset($codigo) && isset($nome) && isset($cpf) && isset($data_nascimento) && isset($plano_saude)) {
			// Acessa model para realizar busca no banco
			if( $this->Model_cadastro_paciente->altPacienteBanco($codigo, $nome, $cpf, $data_nascimento, $plano_saude) ){

				// redirect("cadastro_pacientes");die;
			}else{

				// redirect("cadastro_pacientes");die;
			}
		}
		return true;
	}
	
}

?>