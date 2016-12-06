<form method="post" action="<?php echo base_url('fornecedor/salvarNovo');?>">
    <label for="forNome">Nome*</label><br>
    <input type="text" id="forNome" name="forNome" required="true">
    <br><br>
    <label for="forCnpj">CNPJ</label><br>
    <input type="text" id="forCnpj" name="forCnpj">
    <br><br>
    <label for="forTelefone">Telefone</label><br>
    <input type="text" id="forTelefone" name="forTelefone">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>