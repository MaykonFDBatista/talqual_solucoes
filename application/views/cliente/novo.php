<form method="post" action="<?php echo base_url('cliente/salvarNovo');?>">
    <label for="cliNome">Nome*</label><br>
    <input type="text" id="cliNome" name="cliNome" required="true">
    <br><br>
    <label for="cliLogradouro">Logradouro</label><br>
    <input type="text" id="cliLogradouro" name="cliLogradouro">
    <br><br>
    <label for="cliCidade">Cidade</label><br>
    <input type="text" id="cliCidade" name="cliCidade">
    <br><br>
    <label for="cliEstado">Estado</label><br>
    <input type="text" id="cliEstado" name="cliEstado">
    <br><br>
    <label for="cliTelefone">Telefone</label><br>
    <input type="text" id="cliTelefone" name="cliTelefone">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>