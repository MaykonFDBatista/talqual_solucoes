<?php

class Cliente extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('cliente_model');
    }
    
    public function Index() {
        
        $todosClientes = $this->cliente_model->BuscarTodos();
        
        echo '<pre>';
        print_r($todosClientes);
    }
}

