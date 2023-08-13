<?php
    
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $profissao = $_POST['profissao'];
    $resumo = $_POST['resumo'];

    $erro = 0;


    if(empty($nome)){
        $erro = 1;
        $msg = "Por favor, digite seu nome.";
        
    } 

    if($erro){
        echo "<html><body>";
        echo "<p style='text-align:center'>".$msg."</p>";
        echo "<p style='text-align:center'><a href='home.php'>VOLTAR</a></p>";
        echo "</body></html>";

        } else {

            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "formulario";
        
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

    if(mysqli_connect_errno()){
                echo "Erro ao se conectar com o mysql: " . mysqli_connect_error();
                exit();
            }

     if (!mysqli_query($conn, "INSERT INTO cadastro (id, nome, idade, profissao, resumo)
             VALUES (NULL, '" . $nome . "', '" . $idade . "', '" . $profissao . "', '" . $resumo . "')")) {
                echo ("Descriação do erro: " . mysqli_error($link));
             }

    mysqli_close($conn);

    echo "<html><body>";
    echo "<p style='text-align:center'>Os dados foram registrados com sucesso!</p>";
    echo "<p style='text-align:center'><a href='home.php'>VOLTAR PARA HOME</a></p>";
    echo "</body></html>";

    }
?>