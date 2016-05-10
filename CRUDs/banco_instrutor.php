<?php
function insereInstrutor($conexao, $nome, $cpf, $rg, 
        $nacto, $endereco, $cidade, $estado, $tel, $cel, $email){
    $query = "insert into instrutor (cpf_instrutor, nm_instrutor, dt_nascimento_instrutor, "
            . "cd_registro_geral_instrutor, nm_endereco_instrutor, "
            . "nm_cidade_instrutor, sg_estado_instrutor, "
            . "cd_telefone_um_instrutor, "
            . "cd_telefone_dois_instrutor,"
            . "nm_email_instrutor) VALUES('{$cpf}','{$nome}',"
            . "'{$nacto}','{$rg}','{$endereco}','{$cidade}',"
            . "'{$estado}','{$tel}','{$cel}','{$email}')";
    return mysqli_query($conexao,$query);
}

function listarInstrutores($conexao){
	$instrutores = array();
	$query = "select * from instrutor order by nm_instrutor";
	$resultado = mysqli_query($conexao, $query);
	while($instrutor = mysqli_fetch_assoc($resultado)){
            array_push($instrutores, $instrutor);
	}
	return $instrutores;
}

function buscaInstrutor($conexao, $id){
	$query = "select * from instrutor where cpf_instrutor = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarInstrutor($conexao, $nome, $cpf, $rg, $data, $endereco, 
        $cidade, $estado, $tel, $cel, $email){
        $query = "update instrutor set nm_instrutor='{$nome}',"
        . "dt_nascimento_instrutor='{$data}',cd_registro_geral_instrutor='{$rg}',"
        . "nm_endereco_instrutor='{$endereco}',nm_cidade_instrutor='{$cidade}',"
        . "sg_estado_instrutor='{$estado}',cd_telefone_um_instrutor='{$tel}',"
        . "cd_telefone_dois_instrutor='{$cel}',nm_email_instrutor='{$email}' "
        . "where cpf_instrutor = '{$cpf}'";
	return mysqli_query($conexao, $query);
}

function removeInstrutor($conexao, $id){
	$query = "delete from instrutor where cpf_instrutor = {$id}";
	return mysqli_query($conexao,$query);
}