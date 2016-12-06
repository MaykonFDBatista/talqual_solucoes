<?php echo form_open(base_url('compra/nova'));
    $atributos = array(
        'name' => 'fornecedor',
    );
    echo 'Fornecedor: '. form_input($atributos);
    $atributos = array(
        'name' => 'valor',
    );
    echo 'Valor: '. form_input($atributos);
    $atributosBtn = array(
        'name' => 'btnAtualizar',
        'value'=>   'Salvar',
    );
    echo form_submit($atributosBtn).br(2);
    
echo form_close();

echo '<table border="1">';
    echo '<tr><td>nome</td><td>valor</td><td>Data</td></tr>';
        foreach($compras as $v){
            echo '<tr><td>'.$v->nome.'</td>';
            echo '<td>'.$v->comValor.'</td>';
            echo '<td>'.$v->comData.'</td><tr>';
        }

echo '</table>';