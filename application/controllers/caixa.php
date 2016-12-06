<?php if(!defined('BASEPATH')) exit("Sem direito de acesso direto ao script.");

class Caixa extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('caixa_model', 'cm');
    }
    public function index(){
        $dados['caixa'] = $this->cm->consultar_caixa();
        $this->load->view('caixa', $dados);
    }
    public function atualizar(){
        $dados['valorCaixa'] = $this->input->post('atualizar');
        
        $this->cm->alterar_caixa($dados);
        $dados['caixa'] = $this->cm->consultar_caixa();
        $this->load->view('caixa', $dados);
    }
}