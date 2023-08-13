<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html>
<head>
    <title>Usuários Equipe</title>
</head>
<body>
    <h1> USUÁRIOS<br>
         DA <br>
         EQUIPE </h1>
<form action="cadastro.php" method="POST">   
    <?php

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "formulario";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT id, nome, idade, profissao, resumo FROM cadastro";

    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2> Nome: " . $row["nome"] . "</h2>";
            echo "<p>Idade: " . $row["idade"] . "</p>";
            echo "<p>Profissão: " . $row["profissao"] . "</p>";
            echo "<p> Breve resumo: " . $row["resumo"] . "</p>";
        }
    } else {
        echo "Nenhum Usuário Registrado.";
    }

    $conn->close();
    ?>
    <p>
    <input type="submit" name="enviar" value="CADASTRAR NOVO USUÁRIO">
    </p>
    
</body>
</html>
