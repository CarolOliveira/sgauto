<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';


// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) {session_start();}

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION["UsuarioID"]) or $_SESSION["UsuarioTipo"] <= 0){
	// Destrói a sessão por segurança
	session_destroy();
	session_start();
	$_SESSION["danger"] = "Somente ADM pode ter acesso a página";
	// Redireciona o visitante de volta pro login
	header("Location: ../index.php"); exit;
}else if($_SESSION['UsuarioTipo'] == 2){
	//Redireciona para nivel de gerente
	header("Location: gerente.php");
}else if($_SESSION['UsuarioTipo'] == 3){
	//Redireciona para nivel de instrutor
	header("Location: instrutor.php");
}else if($_SESSION['UsuarioTipo'] == 4){
	//Redireciona para nivel de aluno
	header("Location: aluno.php");
}
?>
<?php
usuarioEstaLogado();
?>

<center>
<h1>Bem Vindo!</h1>

<p class="text-success">Você está logado como <u><?=$_SESSION['UsuarioNome']?></u></p><br><br>

    <a href="listar_usuario.php"><button class="btn btn-primary" title="CRUD Usuário">Usuário</button></a> 
    <a href="listar_aluno.php"><button class="btn btn-primary" title="CRUD Aluno">Aluno</button></a> 
    <a href="listar_veiculo.php"><button class="btn btn-primary" title="CRUD Veículo">Veículo</button></a> 
    <a href="sair.php"><button class="btn btn-danger" title="Sair do Sistema">Sair</button></a> 
</center>

<?php
include '../Includes/rodape.php';
?>
