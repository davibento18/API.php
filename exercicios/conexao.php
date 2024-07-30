<?php
 $host = 'localhost';
 $usuario = 'root';
 $senha = '';
 $banco = 'etecmcm';

 $conexao = new mysqli($host,$usuario,$senha,$banco);

 if($conexao->connect_error){
    die('falha de conexão' .$conexao ->connect_error);
 }
 //else{
    //echo "conectado com sucesso!";
        
// }
 
?>