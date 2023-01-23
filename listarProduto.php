<?php
 $dadosPdo = [
    'dns'=>'mysql:host=localhost; dbname=desafiofinal',
    'usuario'=> 'root',
    'senha'=>'' 
];

$pdo = new PDO ($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);

$sql = "SELECT 
        id_noticia, titulo, subtitulo, imagem
        FROM noticias
        ORDER BY id_noticia DESC LIMIT 20 OFFSET 3";

$dados = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$retorno = [
    'status' => 'sucesso',
    'mensagem' => 'Lista de notícias recuperados com sucesso.',
    'dados'=> $dados
];

echo json_encode($retorno);