<?php

echo '<a href="'.base_url('cliente/novo').'">Cadastrar</a><br><br>';

if(count($todosClientes)) {
    
    echo '<table border="1px">';
    
    echo 
    '<tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Logradouro</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Telefone</td>
        <td>Operações</td>
    </tr>';
    
    foreach ($todosClientes as $cliente) {
        
        echo 
        '<tr>
            <td>'.$cliente->cliId.'</td>
            <td>'.$cliente->cliNome.'</td>
            <td>'.$cliente->cliLogradouro.'</td>
            <td>'.$cliente->cliCidade.'</td>
            <td>'.$cliente->cliEstado.'</td>
            <td>'.$cliente->cliTelefone.'</td>
            <td><a href="'.  base_url('cliente/editar/' . $cliente->cliId).'">Editar</a>&nbsp;&nbsp;&nbsp;<a href="'.  base_url('cliente/excluir/' . $cliente->cliId).'">Excluir</a></td>
        </tr>';
    }
    
    echo '</table>';
}
else {
    
    echo 'Não existem clientes cadastrados';
}