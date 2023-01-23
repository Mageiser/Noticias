
<?php

//gravar imagem em arquivo
$upload = $_FILES['imagem'];

$tipo = 'image/jpeg';
$tamanhoMaximo = 5242880; // 5mb
$arquivoDefinitivo = 'upload/'. $upload['name'];

$tipoValido = $upload['type'] == $tipo ? true: false;
$tamanhoValido = $upload['size'] <= $tamanhoMaximo ? true : false;

//if($tipoValido && $tamanhoValido) {
   if(move_uploaded_file($upload['tmp_name'], $arquivoDefinitivo)) {
    $imagem=$upload['name'];
   }
//}












$titulo=isset($_POST ['titulo']) ? $_POST ['titulo']:'';
$subtitulo=isset($_POST ['subtitulo']) ? $_POST ['subtitulo']:'';
$noticia=isset($_POST ['noticia']) ? $_POST ['noticia']:'';
//$imagem=isset($_POST ['imagem']) ? $_POST ['imagem']:'';
$data_noticia=isset($_POST ['data_noticia']) ? $_POST ['data_noticia']:'';
$autor=isset($_POST ['autor']) ? $_POST ['autor']:'';


        $dadosPdo = [
            'dns'=>'mysql:host=localhost; dbname=desafiofinal',
            'usuario'=> 'root',
            'senha'=>'' 
        ];



$pdo = new PDO ($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo ['senha']);

$sql="INSERT INTO noticias (id_noticia, titulo, subtitulo, noticia, imagem, data_noticia, autor) 
 VALUES (NULL, :titulo, :subtitulo, :noticia, :imagem, :data_noticia, :autor)";

    $consulta=$pdo->prepare($sql);
    $consulta->bindParam(':titulo', $titulo);
    $consulta->bindParam(':subtitulo', $subtitulo);
    $consulta->bindParam(':noticia', $noticia);
    $consulta->bindParam(':imagem', $imagem);
    $consulta->bindParam(':data_noticia', $data_noticia);
    $consulta->bindParam(':autor', $autor);
 
    
 
    $consulta->execute();
       
 
      

    $resultado=$consulta->fetchAll();

    session_start();







    //if ($resultado) 
        header('Location: InserirNoticias.php?sucesso=1');
   // else
        //header('Location: InserirNoticias.php?sucesso=');
    
   
    

    