<?php

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    echo "<p><strong> Nome: " . $nome . "</strong></p>";
    echo "<p><strong> E-mail: " . $email . "</strong></p>";
    echo "<p><strong> Telefone: " . $telefone . "</strong></p>";
    echo "<p><strong> Sexo: " . $sexo . "</strong></p>";
    echo "<p><strong> Senha: " . $senha . "</strong></p>";
    

    if( strlen($nome)==0 )
    {
        //echo " Campo Obrigatório!!! ";
        header("location:Começando.php?erro=nome");
    }
    if( strlen($senha)<= 6 )
    {
        //echo " Coloque uma senha de 6 caracteres ";
        header("location:Começando.php?erro=senha");
    }
    if( strlen($email)== 0 )
    {
        //echo " Por favor, coloque um endereço de e-mail ";
        header("location:Começando.php?erro=email");
    }
    if( strlen($telefone)==0 )
    {
        //echo " Adicione um Número de Telefone, exemplo: 15 98765-4321";
        header("location:Começando.php?erro=telefone");
    }
    

    //Upload - Servidor


    $tmp = $_FILES['arq']['tmp_name'];
    $pasta = "arq/" . $_FILES['arq']['name'];
    move_uploaded_file($tmp , $pasta);
    echo (int) move_uploaded_file($tmp , $pasta);
    
    if( move_uploaded_file($tmp , $pasta)==0 )
    {
       echo " Arquivo Transferido com sucesso";
    }


?>
