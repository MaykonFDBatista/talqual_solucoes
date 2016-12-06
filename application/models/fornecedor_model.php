<?php
class Fornecedor_model extends CI_Model{
    
    var $tabela = 'fornecedor';
    
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
        
        $this->db->where('forId', $id);
        
        $this->db->delete($this->tabela);
    }
    
    function Cadastrar($dados) {
        
        $this->db->insert($this->tabela, $dados);
    }
    
    function BuscarPorId($id) {
        
        $this->db->from($this->tabela);
        $this->db->where('forId', $id);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()) {
            
            return $resultado->row();
        }
        else {
            
            return false;
        }
    }
    
    function Editar($dados) {
        
        $this->db->where('forId', $dados['forId']);
        $this->db->update($this->tabela, $dados);
    }
}