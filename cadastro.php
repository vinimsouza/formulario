<link rel="stylesheet" href="style.css">
<br>
<form action="conexao.php" method="POST">
    <h1> ADICIONAR NOVO USUÁRIO: </h1>
    <p> Insira sua foto: </p>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="imagem" id="imagem" accept=".jpg, .jpeg, .png" value="">
    <p> Deixe seu contato:<br>
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Profissão: <input type='text' name="profissao">
    </p>
    <p> Deixe um breve resumo sobre você: <br>
        <textarea name="resumo" rows="8" cols="50"></textarea>
    </p>
    <p>
    <input type="submit" name="enviar" value="Salvar">
    </p>

</form>

