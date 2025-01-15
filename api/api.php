<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
header('Content-Type: text/html; charset=utf-8');

if($_SERVER['REQUEST_METHOD'] == "POST"){
   // echo 'Recebido POST';


$dados = array("hora" =>$_POST['hora'], "valor"=>$_POST['valor'],"nome"=>$_POST['nome']);
print_r($dados);


if(isset($_POST['valor']) && isset($_POST['nome']) && isset($_POST['hora'])){
    file_put_contents("../files/" . $_POST["nome"] . "/valor.txt", "$_POST[valor]");
    file_put_contents("../files/" . $_POST["nome"] . "/hora.txt", "$_POST[hora]");
    file_put_contents("../files/" . $_POST["nome"] . "/name.txt", "$_POST[nome]");
    file_put_contents("../files/" . $_POST["nome"] . "/log.txt", $_POST["hora"].$_POST["valor"]."\n", FILE_APPEND);
}else{
    http_response_code(400);
    echo('{"erro:" "Os parâmentros recebidos não são válidos!"}' . PHP_EOL);
    exit(); 
}

}
    elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
        //echo 'Recebido GET';
        if(isset($_GET['nome']) && $_GET['nome']=="temperatura"){
           echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");

        }
        else{
            http_response_code(400);
            echo('{"erro": "Faltam parametros no Get"}');
        }
        

        if(isset($_GET['nome']) && $_GET['nome']=="fumo"){
            echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");
 
         }
         else{
             http_response_code(400);
             echo('{"erro": "Faltam parametros no Get"}');
         }





         if(isset($_GET['nome']) && $_GET['nome']=="ac"){
            echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");
 
         }
         else{
             http_response_code(400);
             echo('{"erro": "Faltam parametros no Get"}');
         }

         if(isset($_GET['nome']) && $_GET['nome']=="luz"){
            echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");
 
         }
         else{
             http_response_code(400);
             echo('{"erro": "Faltam parametros no Get"}');
         }


         if(isset($_GET['nome']) && $_GET['nome']=="luz"){
            echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");
 
         }
         else{
             http_response_code(400);
             echo('{"erro": "Faltam parametros no Get"}');
         }


         if(isset($_GET['nome']) && $_GET['nome']=="garage"){
            echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");
 
         }
         else{
             http_response_code(400);
             echo('{"erro": "Faltam parametros no Get"}');
         }


         if(isset($_GET['nome']) && $_GET['nome']=="door"){
            echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");
 
         }
         else{
             http_response_code(400);
             echo('{"erro": "Faltam parametros no Get"}');
         }

         if(isset($_GET['nome']) && $_GET['nome']=="Painel Solar"){
            echo file_get_contents("../files/". $_GET['nome'] . "/valor.txt");
 
         }
         else{
             http_response_code(400);
             echo('{"erro": "Faltam parametros no Get"}');
         }


    }
    else{
        http_response_code(403);
        echo('{"erro": "Método" .$_SERVER["REQUEST_METHOD"]. "nao permitido!"}');
        echo 'Não permitido';
    }
?>


</body>
</html>
