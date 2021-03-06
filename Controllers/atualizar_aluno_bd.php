<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_instrutor.php';
include 'logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$busca = buscaInstrutor($conexao, $id)

?>

<center>
    <h2>Atualização de Dados de Instrutores</h2>
    <form action="../Models/atualizar_instrutor.php" method="post">
        <input type="hidden" name="id" value="<?=$busca['id_instrutor']?>">
        <table border="0" class="table">
            <tr><td>Nome do instrutor</td><td><input type="text" class="form-control" name="nome_instrutor" size="60" value="<?=$busca['nm_instrutor']?>" required></td></tr>
            <tr><td>CPF do instrutor</td><td><input type="number" class="form-control" name="cpf_instrutor" size="60" value="<?=$busca['cpf_instrutor']?>" required></td></tr>
            <tr><td>RG do instrutor</td><td><input type="number" class="form-control" name="rg_instrutor" min="1" size="20" value="<?=$busca['cd_registro_geral_instrutor']?>" required></td></tr>
            <tr><td>Data de Nascimento</td><td><input type="date" class="form-control" name="aniversario_instrutor" placeholder="DD/MM/AAAA" size="20" value="<?=$busca['dt_nascimento_instrutor']?>" required></td></tr>
            <tr><td>Endereço do instrutor</td><td><input type="text" class="form-control" name="endereco_instrutor" size="60" value="<?=$busca['nm_endereco_instrutor']?>" required></td></tr>
            <tr><td>Cidade</td><td><input type="text" class="form-control" name="cidade_instrutor" size="60" value="<?=$busca['nm_cidade_instrutor']?>" required></td></tr>
            <tr><td>Estado</td><td>
                    <select name="estado_instrutor" class="form-control">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP" selected="">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        
                    </select>    
                </td></tr>
            <tr><td>Telefone Fixo</td><td><input type="number" class="form-control" name="tel_instrutor" size="60" value="<?=$busca['cd_telefone_um_instrutor']?>" required></td></tr>
            <tr><td>Telefone Celular</td><td><input type="number" class="form-control" name="cel_instrutor" size="60" value="<?=$busca['cd_telefone_dois_instrutor']?>" required></td></tr>
            <tr><td>E-Mail do instrutor</td><td><input type="email" class="form-control" name="email_instrutor" size="60" value="<?=$busca['nm_email_instrutor']?>" required></td></tr>
        </table>
        <button class="btn btn-success" type="submit">Atualizar</button>     
    </form>
    <a href="../Views/listar_instrutor.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>

