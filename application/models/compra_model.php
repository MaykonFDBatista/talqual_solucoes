<?php if(!defined('BASEPATH')) exit("Sem direito de acesso direto ao script.");

class Compra_Model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    function consultar_compras(){
        $this->db->select('c.*, f.forNome nome');
        $this->db->from('compra c');
        $this->db->join('fornecedor f','f.forId = c.comFornecedorId', 'inner');
        
        return $this->db->get()->result();        
    }
    function nova_venda($dados){
        return $this->db->insert('compra', $dados);
    }
}