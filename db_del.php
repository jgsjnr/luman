<?php include 'verify.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sistema Logistica Humanitaria Luman</title>
</head>
<body>
<?php
$link = new mysqli('localhost:3306', 'root', '1234', 'luman');
if ($link -> connect_errno){
    echo ('<h1>Não conseguiu se conectar: </h1>' . $link -> connect_error . '<br>');
    exit();
}else{
    echo '<h1>Conexão bem sucedida: </h1><br>';
}
$hashmod=$_POST['hash'];
if(!$link -> query("DELETE FROM lancamentos WHERE Validacao = '$hashmod'")){
    //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    if(!$link -> query("DELETE FROM hashes WHERE hash = '$hashmod'")){
        //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    }
}
else{
    echo '<h1>Exclusão bem sucedido</h1><br>' ;
}
$link -> close();
echo $hashmod;
?>
<p><string><a href="./del.php" class="btn btn-light">Voltar</a></strong>
<p><?php echo "<h1> $login_cookie </h1>"; ?><string><a href="./logout.php" class="btn btn-light">Deslogar</a></strong>
</body>
</html>

