<?php echo form_open(base_url('venda/nova'));
    $atributos = array(
        'name' => 'cliente',
    );
    echo 'Cliente: '. form_input($atributos);
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
        foreach($vendas as $v){
            echo '<tr><td>'.$v->nome.'</td>';
            echo '<td>'.$v->venValor.'</td>';
            echo '<td>'.$v->venData.'</td><tr>';
        }

echo '</table>';