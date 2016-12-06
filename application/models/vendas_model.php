<?php if(!defined('BASEPATH')) exit("Sem direito de acesso direto ao script.");

class Vendas_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    function consultar_vendas(){
        $this->db->select('v.*, c.cliNome nome');
        $this->db->from('venda v');
        $this->db->join('cliente c','c.cliId = v.venClienteId', 'inner');
        
        return $this->db->get()->result();        
    }
    function nova_venda($dados){
        return $this->db->insert('venda', $dados);
    }
}