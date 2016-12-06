<?php if(!defined('BASEPATH')) exit("Sem direito de acesso direto ao script.");

class Venda extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('vendas_model', 'vm');
    }
    public function index(){
        $dados['vendas'] = $this->vm->consultar_vendas();
        $this->load->view('vendas', $dados);
    }
    public function nova(){
        $dados['venValor'] = $this->input->post('valor');
        $dados['venClienteId'] = $this->input->post('cliente');
        
        $this->vm->nova_venda($dados);
        $dados['vendas'] = $this->vm->consultar_vendas();
        $this->load->view('vendas', $dados);
    }
}