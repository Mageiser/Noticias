
<?php
$nome=isset($_POST ['nome']) ? $_POST ['nome']:'';
$email=isset($_POST ['email']) ? $_POST ['email']:'';
$cidade=isset($_POST ['cidade']) ? $_POST ['cidade']:'';
$estado=isset($_POST ['estado']) ? $_POST ['estado']:'';
$senha=isset($_POST ['senha']) ? $_POST ['senha']:'';


        $dadosPdo = [
            'dns'=>'mysql:host=localhost; dbname=desafiofinal',
            'usuario'=> 'root',
            'senha'=>'' 
        ];



$pdo = new PDO ($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo ['senha']);

$sql="INSERT INTO usuarios (id_cadastro, nome, email, cidade, estado, senha) 
 VALUES (NULL, :nome, :email, :cidade, :estado, :senha)";

    $consulta=$pdo->prepare($sql);
    $consulta->bindParam(':nome', $nome);
    $consulta->bindParam(':email', $email);
    $consulta->bindParam(':cidade', $cidade);
    $consulta->bindParam(':estado', $estado);
    $consulta->bindParam(':senha', $senha);
 
    
 
    $consulta->execute();
       
 
      

    $resultado=$consulta->fetchAll();

    session_start();


    header('Location: cadastro.php');
    
  

    