<?php
class Mebrafe_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    # VALIDA USUÁRIO LOGON
    function getUsuarioBanco() {

        $cQuery = "";
        $data = array();

        $cQuery  = " SELECT * FROM `usuario`  ";
        
        $query = $this->db->query($cQuery);
        foreach ($query->result_array() as $row)
        {
        return true;
        }
 
        return false;

    }

}
?>


