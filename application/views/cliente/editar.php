<form method="post" action="<?php echo base_url('cliente/salvarEdicao');?>">
    <input type="hidden" name="cliId" value="<?php echo $cliente->cliId;?>">
    <label for="cliNome">Nome*</label><br>
    <input type="text" id="cliNome" name="cliNome" required="true" value="<?php echo $cliente->cliId;?>">
    <br><br>
    <label for="cliLogradouro">Logradouro</label><br>
    <input type="text" id="cliLogradouro" name="cliLogradouro" value="<?php echo $cliente->cliLogradouro;?>">
    <br><br>
    <label for="cliCidade">Cidade</label><br>
    <input type="text" id="cliCidade" name="cliCidade" value="<?php echo $cliente->cliCidade;?>">
    <br><br>
    <label for="cliEstado">Estado</label><br>
    <input type="text" id="cliEstado" name="cliEstado" value="<?php echo $cliente->cliEstado;?>">
    <br><br>
    <label for="cliTelefone">Telefone</label><br>
    <input type="text" id="cliTelefone" name="cliTelefone" value="<?php echo $cliente->cliTelefone;?>">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>