<?php
include '../CRUDs/banco_aluno.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

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

if(insereAluno($conexao, $nome, $cpf, $rg, $data, $endereco, $cidade, $estado, $tel, $cel, $email)){
    $_SESSION["success"] = "Cadastrado com sucesso";
    header('Location: ../Views/listar_aluno.php');
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar aluno: <?=$msg?></p>
<?php
}
?>
