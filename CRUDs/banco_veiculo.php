<?php
function insereVeiculo($conexao, $nome, $fabricante, $qtd, $placa){
    $query = "insert into veiculo (nm_veiculo, nm_fabricante_veiculo, qt_veiculo,"
            . "placa_veiculo) VALUES('{$nome}','{$fabricante}',{$qtd},'{$placa}')";
    return mysqli_query($conexao,$query);
}

function listarVeiculos($conexao){
	$veiculos = array();
	$query = "select * from veiculo order by cd_veiculo";
	$resultado = mysqli_query($conexao, $query);
	while($veiculo = mysqli_fetch_assoc($resultado)){
		array_push($veiculos, $veiculo);
	}
	return $veiculos;
}

function buscaVeiculo($conexao, $id){
	$query = "select * from veiculo where cd_veiculo = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarVeiculo($conexao,$id,$nome,$fabricante,$qtd, $placa){
        $query = "update produto set nm_veiculo='{$nome}',"
        . "nm_fabricante_veiculo='{$fabricante}',qt_veiculo={$qtd},"
        . "placa_veiculo={$placa} where cd_veiculo = {$id}";
	return mysqli_query($conexao, $query);
}

function removeVeiculo($conexao, $id){
	$query = "delete from veiculo where cd_veiculo = {$id}";
	return mysqli_query($conexao,$query);
}