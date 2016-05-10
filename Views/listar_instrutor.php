<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_instrutor.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Instrutores</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<p align="right"><a href="cadastro_instrutor.php"><button class="btn btn-info">Cadastrar</button></a></p>
<table class="table table-striped table-bordered">
    <tr><td>Nome do instrutor</td><td>CPF</td><td>RG</td><td>Endereço</td><td>Telefones</td><td>E-Mail</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $instrutores = listarInstrutores($conexao);
            foreach($instrutores as $lista){
	?>
    <tr>
	<td><?=$lista['nm_instrutor']?></td>
	<td><?=$lista['cpf_instrutor']?></td>
	<td><?=$lista['cd_registro_geral_instrutor']?></td>
	<td><?=$lista['nm_endereco_instrutor']?>, <?=$lista['nm_cidade_instrutor']?>\<?=$lista['sg_estado_instrutor']?></td>
	<td><?=$lista['cd_telefone_um_instrutor']?> \ <?=$lista['cd_telefone_dois_instrutor']?></td>
        <td><?=$lista['nm_email_instrutor']?></td>
        <td><a href="../Controllers/atualizar_instrutor_bd.php?id=<?=$lista['cpf_instrutor']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_instrutor_bd.php?id=<?=$lista['cpf_instrutor']?>"><button class="btn btn-danger">Deletar</button></a></td>
	</tr>
    <?php
        }
    ?>
	</table>
</center>
<a href="acesso.php">Pagina Principal</a>

<?php
include '../Includes/rodape.php';
?>


