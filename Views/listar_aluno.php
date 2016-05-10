<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_aluno.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Alunos</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<p align="right"><a href="cadastro_aluno.php"><button class="btn btn-info">Cadastrar</button></a></p>
<table class="table table-striped table-bordered">
    <tr><td>Nome do Aluno</td><td>CPF</td><td>RG</td><td>Endereço</td><td>Telefones</td><td>E-Mail</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $alunos = listarAlunos($conexao);
            foreach($alunos as $lista){
	?>
    <tr>
	<td><?=$lista['nm_aluno']?></td>
	<td><?=$lista['cpf_aluno']?></td>
	<td><?=$lista['cd_registro_geral_aluno']?></td>
	<td><?=$lista['nm_endereco_aluno']?>, <?=$lista['nm_cidade_aluno']?>\<?=$lista['sg_estado_aluno']?></td>
	<td><?=$lista['cd_telefone_um_aluno']?> \ <?=$lista['cd_telefone_dois_aluno']?></td>
        <td><?=$lista['nm_email_aluno']?></td>
        <td><a href="../Controllers/atualizar_aluno_bd.php?id=<?=$lista['cpf_aluno']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_aluno_bd.php?id=<?=$lista['cpf_aluno']?>"><button class="btn btn-danger">Deletar</button></a></td>
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


