<?php
    $valor = $_POST['valor']
    $moeda = $_POST['moeda']
    
    $conn = new mysqli('localhost','root','','laravel');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into toperacao(valor, moeda)
            values (?, ?)");
        $stmt->bind_param("sssssi",$valor, $moeda)
        $stmt->execute();
        echo "Registro Concluido";
        $stmt->close();
        $conn->close();
    }

?>