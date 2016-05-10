<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_aluno.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$nome = $_POST["nome_aluno"];
$cpf = $_POST["cpf_aluno"];
$rg = $_POST["rg_aluno"];
//$nacto = $_POST["aniversario_aluno"];
$endereco = $_POST["endereco_aluno"];
$cidade = $_POST["cidade_aluno"];
$estado = $_POST["estado_aluno"];
$tel = $_POST["tel_aluno"];
$cel = $_POST["cel_aluno"];
$email = $_POST["email_aluno"];

$data = implode('-',array_reverse(explode('/',$_POST['aniversario_aluno'])));

if(alterarAluno($conexao, $id, $nome, $cpf, $rg, $data, $endereco, $cidade, $estado, $tel, $cel, $email)){
     $_SESSION["success"] = "Atualizado com sucesso";
    header('Location: ../Views/listar_aluno.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>