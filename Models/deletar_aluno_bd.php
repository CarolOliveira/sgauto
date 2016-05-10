<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_aluno.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_GET["id"];

if(removeAluno($conexao,$id)){
        $_SESSION["success"] = "Deletado com sucesso";
	header('Location: ../Views/listar_aluno.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao remover Aluno: <?=$msg?></p>
<?php
}

include '../Includes/rodape.php';
?>