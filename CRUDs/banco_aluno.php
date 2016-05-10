<?php
function insereAluno($conexao, $nome, $cpf, $rg, 
        $nacto, $endereco, $cidade, $estado, $tel, $cel, $email){
    $query = "insert into aluno (cpf_aluno, nm_aluno, dt_nascimento_aluno, "
            . "cd_registro_geral_aluno, nm_endereco_aluno, "
            . "nm_cidade_aluno, sg_estado_aluno, "
            . "cd_telefone_um_aluno, "
            . "cd_telefone_dois_aluno,"
            . "nm_email_aluno) VALUES('{$cpf}','{$nome}',"
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

function buscaAluno($conexao, $id){
	$query = "select * from aluno where cpf_aluno = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarAluno($conexao, $nome, $cpf, $rg, $data, $endereco, 
        $cidade, $estado, $tel, $cel, $email){
        $query = "update aluno set nm_aluno='{$nome}',"
        . "dt_nascimento_aluno='{$data}',cd_registro_geral_aluno='{$rg}',"
        . "nm_endereco_aluno='{$endereco}',nm_cidade_aluno='{$cidade}',"
        . "sg_estado_aluno='{$estado}',cd_telefone_um_aluno='{$tel}',"
        . "cd_telefone_dois_aluno='{$cel}',nm_email_aluno='{$email}' "
        . "where cpf_aluno = '{$cpf}'";
	return mysqli_query($conexao, $query);
}

function removeAluno($conexao, $id){
	$query = "delete from aluno where cpf_aluno = {$id}";
	return mysqli_query($conexao,$query);
}