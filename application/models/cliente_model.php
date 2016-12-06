<?php
class Cliente_model extends CI_Model{
    
    var $tabela = 'cliente';
    
    function BuscarTodos() {
    
        $this->db->from($this->tabela);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()) {
            
            return $resultado->result();
        }
        else {
            
            return array();
        }
    }
}