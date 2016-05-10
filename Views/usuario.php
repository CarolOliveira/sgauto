<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';


usuarioEstaLogado();
?>

<center>
<h1>Bem Vindo!</h1>

<p class="text-success">Você está logado como <u><?=$_SESSION['UsuarioNome']?></u></p><br><br>

    <a href="listar_usuario.php"><button class="btn btn-primary" title="CRUD Usuário">Usuário</button></a> 
    <a href="listar_instrutor.php"><button class="btn btn-primary" title="CRUD Instrutor">Instrutor</button></a>
    <a href="listar_aluno.php"><button class="btn btn-primary" title="CRUD Aluno">Aluno</button></a> 
    <a href="listar_veiculo.php"><button class="btn btn-primary" title="CRUD Veículo">Veículo</button></a> 
    <a href="sair.php"><button class="btn btn-danger" title="Sair do Sistema">Sair</button></a> 
</center>

<?php
include '../Includes/rodape.php';
?>
