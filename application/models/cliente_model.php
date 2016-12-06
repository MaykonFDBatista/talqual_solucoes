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
    
    function Excluir($id) {
        
        $this->db->where('cliId', $id);
        
        $this->db->delete($this->tabela);
    }
    
    function Cadastrar($dados) {
        
        $this->db->insert($this->tabela, $dados);
    }
    
    function BuscarPorId($id) {
        
        $this->db->from($this->tabela);
        $this->db->where('cliId', $id);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()) {
            
            return $resultado->row();
        }
        else {
            
            return false;
        }
    }
    
    function Editar($dados) {
        
        $this->db->where('cliId', $dados['cliId']);
        $this->db->update($this->tabela, $dados);
    }
}