<a href="<?php echo base_url('cliente');?>">Gerenciar Clientes</a><br><br>
<?php

echo '<a href="'.base_url('fornecedor/novo').'">Cadastrar</a><br><br>';

if(count($todosClientes)) {
    
    echo '<table border="1px">';
    
    echo 
    '<tr>
        <td>Id</td>
        <td>Nome</td>
        <td>CNPJ</td>
        <td>Telefone</td>
        <td>Operações</td>
    </tr>';
    
    foreach ($todosClientes as $fornecedor) {
        
        echo 
        '<tr>
            <td>'.$fornecedor->forId.'</td>
            <td>'.$fornecedor->forNome.'</td>
            <td>'.$fornecedor->forCnpj.'</td>
            <td>'.$fornecedor->forTelefone.'</td>
            <td><a href="'.  base_url('fornecedor/editar/' . $fornecedor->forId).'">Editar</a>&nbsp;&nbsp;&nbsp;<a href="'.  base_url('fornecedor/excluir/' . $fornecedor->forId).'">Excluir</a></td>
        </tr>';
    }
    
    echo '</table>';
}
else {
    
    echo 'Não existem fornecedores cadastrados';
}