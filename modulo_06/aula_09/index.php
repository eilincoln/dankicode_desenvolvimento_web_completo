<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário!</title>
</head>
<body>
    <?php
        //usado para poder buscar informações que os usuários mandam.
        if(isset($_GET['acao'])){
            $nome = @$_GET['nome'];
            $email = @$_GET['email'];
            echo $nome;
            echo '<br>';
            echo $email;
        }
    ?>
    <form action="">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>