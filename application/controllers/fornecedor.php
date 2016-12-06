<?php

class Fornecedor extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('fornecedor_model');
    }
    
    public function Index() {
        
        $dados['todosClientes'] = $this->fornecedor_model->BuscarTodos();
        
        $this->load->view('fornecedor/mostrarTodos', $dados);
    }
    
    public function Excluir($id) {
        
        $this->fornecedor_model->excluir($id);
        
        redirect(base_url('fornecedor'));
    }
    
    public function Novo() {
        
        $this->load->view('fornecedor/novo');
    }
    
    public function SalvarNovo() {
        
        $this->fornecedor_model->cadastrar($this->input->post());
        
        redirect(base_url('fornecedor'));
    }
    
    public function Editar($id) {
        
        $dados = new stdClass();
        $dados->fornecedor = $this->fornecedor_model->BuscarPorId($id);
        
        if(isset($dados->fornecedor->forId)){
            
            $this->load->view('fornecedor/editar', $dados);
        }
        else {
            
            redirect(base_url('fornecedor'));
        }
    }
    
    public function SalvarEdicao() {
        
        $this->fornecedor_model->editar($this->input->post());
        
        redirect(base_url('fornecedor'));
    }
}

