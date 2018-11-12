<?php
class Model_cadastro_paciente extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    # INSERE PACIENTE
    function setPacienteBanco($paciente, $cpf, $data_nascimento, $plano_saude) {

        $cQuery = "";
        $query = null;

        $cpf = str_replace(array('.','-'), "", $cpf);
        // var_dump($cpf);die;
        // var_dump($data_nascimento);die;
        // $data_nascimento = date('d-m-Y', strtotime($data_nascimento));


        // var_dump($cpf);die;
        $cQuery  = " INSERT INTO `paciente`(`id_paciente`, `nome`, `cpf`, `data_nascimento`, `plano_saude`, `data_cadastro`, `hora_cadastro`) 
                    SELECT  LPAD(COALESCE(MAX(`id_paciente`),0)+1,
                                (SELECT character_maximum_length FROM information_schema.columns WHERE table_name = 'paciente' AND column_name = 'id_paciente'),
                                '0'),
                            '".$paciente."',".$cpf.",'".$data_nascimento."','".$plano_saude."',CURDATE(), CURTIME() FROM `paciente` ";
        $query = $this->db->query($cQuery);
        return true;
        
    }

    # BUSCA PACIENTE
    function getPacientesBanco() {

        $cQuery = "";
        $query = null;
        $data = array();

        $cQuery  = " SELECT `id_paciente`, `nome`, `cpf`, `data_nascimento`, `plano_saude`, `data_cadastro`, `hora_cadastro` FROM `paciente` ";
        
        $query = $this->db->query($cQuery);
        $data = $query->result_array();
        // foreach ($query->result_array() as $row) {
        //     return true;
        // }
 
        return $data;
        
    }

    # DELETA PACIENTE
    function delPacienteBanco($paciente) {

        $cQuery = "";
        
        $cQuery  = " DELETE FROM `paciente` WHERE `id_paciente` = '".$paciente."' ";
        
        $query = $this->db->query($cQuery);
        
        return true;
        
    }

    # ALTERA PACIENTE
    function altPacienteBanco($codigo, $nome, $cnpj, $data_nasc, $plano_saude) {

        $cQuery = "";
        $query = null;

        $cQuery  = " UPDATE `paciente` SET `nome` = '".$nome."', `cpf` = ".$cnpj.", `data_nascimento` = '".$data_nasc."', `plano_saude` = '".$plano_saude."'
                    WHERE `id_paciente` = '".$codigo."' ";
        
        $query = $this->db->query($cQuery);
        
        return true;
    }

}
?>


