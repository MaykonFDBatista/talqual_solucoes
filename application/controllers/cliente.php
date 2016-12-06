<?php

class Cliente extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('cliente_model');
    }
    
    public function Index() {
        
        $dados['todosClientes'] = $this->cliente_model->BuscarTodos();
        
        $this->load->view('cliente/mostrarTodos', $dados);
    }
    
    public function Excluir($id) {
        
        $this->cliente_model->excluir($id);
        
        redirect(base_url('cliente'));
    }
    
    public function Novo() {
        
        $this->load->view('cliente/novo');
    }
    
    public function SalvarNovo() {
        
        $this->cliente_model->cadastrar($this->input->post());
        
        redirect(base_url('cliente'));
    }
    
    public function Editar($id) {
        
        $dados = new stdClass();
        $dados->cliente = $this->cliente_model->BuscarPorId($id);
        
        if(isset($dados->cliente->cliId)){
            
            $this->load->view('cliente/editar', $dados);
        }
        else {
            
            redirect(base_url('cliente'));
        }
    }
    
    public function SalvarEdicao() {
        
        $this->cliente_model->editar($this->input->post());
        
        redirect(base_url('cliente'));
    }
}

