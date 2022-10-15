<?php

$xml = simplexml_load_file('./core/signos.xml');
$dataNascimento = montarData($_GET['data_nascimento']);
buscarSigno($xml, $dataNascimento);



function montarData($data)
{
    $dataNascimento = new DateTime($data);
    $dataNascimento = $dataNascimento->format('m-d');

    return $dataNascimento;
}

function buscarSigno($xml, $dataNascimento)
{
    foreach ($xml->signo as $signo) {
        if ($dataNascimento >= $signo->dataInicio && $dataNascimento <= $signo->dataFim) {
            echo json_encode($signo);
            die;
        }
    };
}
