<?php
function insereInstrutor($conexao, $nome, $cpf, $rg, 
        $nacto, $endereco, $cidade, $estado, $tel, $cel, $email){
    $query = "insert into instrutor (cpf_instrutor, nm_instrutor, dt_nascimento_aluno, "
            . "cd_registro_geral_aluno, nm_endereco_aluno, "
            . "nm_cidade_aluno, sg_estado_aluno, "
            . "cd_telefone_um_aluno, "
            . "cd_celular_aluno,"
            . "nm_email_cliente) VALUES('{$cpf}','{$nome}',"
            . "'{$nacto}','{$rg}','{$endereco}','{$cidade}',"
            . "'{$estado}','{$tel}','{$cel}','{$email}')";
    return mysqli_query($conexao,$query);
}

function listarAlunos($conexao){
	$alunos = array();
	$query = "select * from aluno order by nm_aluno";
	$resultado = mysqli_query($conexao, $query);
	while($aluno = mysqli_fetch_assoc($resultado)){
            array_push($alunos, $aluno);
	}
	return $alunos;
}

function buscaInstrutor($conexao, $id){
	$query = "select * from aluno where cpf_instrutor = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarInstrutor($conexao, $nome, $cpf, $rg, $data, $endereco, 
        $cidade, $estado, $tel, $cel, $email){
        $query = "update instrutor set nm_instrutor='{$nome}',"
        . "dt_nascimento_instrutor='{$data}',cd_registro_geral_instrutor='{$rg}',"
        . "nm_endereco_instrutor='{$endereco}',nm_cidade_instrutor='{$cidade}',"
        . "sg_estado_instrutor='{$estado}',cd_telefone_um_instrutor='{$tel}',"
        . "cd_celular_instrutor='{$cel}',nm_email_instrutor='{$email}' "
        . "where cpf_instrutor = '{$cpf}'";
	return mysqli_query($conexao, $query);
}

function removeInstrutor($conexao, $id){
	$query = "delete from instrutor where cpf_instrutor = {$id}";
	return mysqli_query($conexao,$query);
}