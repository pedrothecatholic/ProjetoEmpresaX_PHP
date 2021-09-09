<?php

function lerArquivo($nomeArquivo)
{
    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

function buscarFuncionario($funcionarios, $nome)
{

    $funcionariosFiltro = [];
    
    foreach ($funcionarios as $funcionario) {
        if (strpos($funcionario->first_name, $nome) !== false) {
            $funcionariosFiltro[] = $funcionario;
        }
    }
    return $funcionariosFiltro;
}

function adicionarFuncionario($nomeArquivo, $novoFuncionario)
{
    $funcionarios = lerArquivo($nomeArquivo);
    $id = count($funcionarios) + 1;
    $funcionario['id'] = $id;
    $funcionarios[] = $funcionario;
    $json = json_encode($funcionarios);
    file_put_contents($nomeArquivo, $json);
}
