<form method="post" action="<?php echo base_url('fornecedor/salvarEdicao');?>">
    <input type="hidden" name="forId" value="<?php echo $fornecedor->forId;?>">
    <label for="forNome">Nome*</label><br>
    <input type="text" id="forNome" name="forNome" required="true" value="<?php echo $fornecedor->forNome;?>">
    <br><br>
    <label for="forCnpj">CNPJ</label><br>
    <input type="text" id="forCnpj" name="forCnpj" value="<?php echo $fornecedor->forCnpj;?>">
    <br><br>
    <label for="forTelefone">Telefone</label><br>
    <input type="text" id="forTelefone" name="forTelefone" value="<?php echo $fornecedor->forTelefone;?>">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>