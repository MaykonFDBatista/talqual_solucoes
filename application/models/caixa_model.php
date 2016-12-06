<?php if(!defined('BASEPATH')) exit("Sem direito de acesso direto ao script.");

class Caixa_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    function consultar_caixa(){
        $this->db->select('*');
        $this->db->from('caixa');
        
        return $this->db->get()->result();
    }
    function alterar_caixa($dados){
        return $this->db->update('caixa', $dados);
        
    }
}