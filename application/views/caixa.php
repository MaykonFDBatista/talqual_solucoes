<a href="<?php echo base_url('compra');?>">Compras</a><br>
<a href="<?php echo base_url('venda');?>">Vendas</a><br>
<a href="<?php echo base_url('caixa');?>">Caixa</a><br>
<a href="<?php echo base_url('cliente');?>">Gerenciar Clientes</a><br>
<a href="<?php echo base_url('fornecedor');?>">Gerenciar Fornecedores</a><br><br>
<?php 

echo '<h1><p align="center">Caixa da Tal Qual Soluções.</p></h1>';
echo form_open(base_url('caixa/atualizar'));
    $atributos = array(
        'name' => 'atualizar',
    );
    $atributosBtn = array(
        'name' => 'btnAtualizar',
        'value'=>   'Atualizar',
    );
    echo '<p align="center"><b>Atualizar valor: </b>'.  form_input($atributos).nbs().form_submit($atributosBtn).'</p>';
echo form_close();
echo '<p align="center"><b>Valor atual no caixa: </b>'.$caixa[0]->valorCaixa.'</p>';