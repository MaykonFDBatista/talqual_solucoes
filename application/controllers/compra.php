<?php if(!defined('BASEPATH')) exit("Sem direito de acesso direto ao script.");

class Compra extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('compra_model', 'cm');
    }
    public function index(){
        $dados['compras'] = $this->cm->consultar_compras();
        $this->load->view('compra', $dados);
    }
    public function nova(){
        $dados['comValor'] = $this->input->post('valor');
        $dados['comFornecedorId'] = $this->input->post('fornecedor');
        
        $this->cm->nova_venda($dados);
        $dados['compras'] = $this->cm->consultar_compras();
        $this->load->view('compra', $dados);
    }
}