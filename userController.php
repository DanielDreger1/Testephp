<?php
$paginas = ['inicio'=>'Seja bem vindo(a)', 'Fale conosco'=>'', 'Assinatura'=>'DanielD'];
?>

<!DOCTYPE HTML>
<html>
    <head>
    <title>
        Site Dinâmico
    </title>
    <style type= "text/css">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    header{
        background-color:#079;
        padding:8px 10px;
        text-align: center;
    }
    a{
        display: inline-block;
        margin:0 10px;
        color: white;
        font-size: 17px;
    }
    </style>
    <body>
        <header>
            <?php
            foreach ($paginas as $key => $value){
                echo '<a href= "?page='.$key.'">'.ucfirst($key).'</a>';
            }
            ?>
            </header>
        </body>
        </html>

        <?php
if($_POST)
{
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    echo "login: ". $login;
    echo "senha: ". $senha;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset ="utf-8"/>
        <title> Get and Post do php </title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="senha" placeholder="senha">
        <input type="submit" value="enviar">
</form>
</body>
</html>