<?php
class Model_login extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    # VALIDA USUÁRIO LOGON
    function getUsuarioBanco($usuario, $senha) {

        $cQuery = "";
        $query = null;
        $data = array();

        $cQuery  = " SELECT * FROM usuario WHERE login = '".$usuario."' AND senha = '".$senha."' ";
        
        $query = $this->db->query($cQuery); // or die(mysql_error());
        foreach ($query->result_array() as $row) {
            return true;
        }
 
        return false;

    }

}
?>


