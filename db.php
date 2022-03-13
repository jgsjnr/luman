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
include 'verify.php';
$link = new mysqli('localhost:3306', 'root', '1234', 'luman');
if ($link -> connect_errno){
    echo ('<h1>Não conseguiu se conectar: </h1>' . $link -> connect_error . '<br>');
    exit();
}else{
    echo '<h1>Conexão bem sucedida: </h1><br>';
}
$banco="lancamentos";
$tipo=$_POST['Tipo'];
$regiao=$_POST['Regiao'];
$anomesdia=$_POST['anomesdia'];
$local=$_POST['Local'];
$comentarios=$_POST['Comentarios'];

$anomes = date("Ym", strtotime($anomesdia));

/*
if($parcelado == "sim"){
    $validacaoString = $tipo."".$regiao."".$anomesdia."".$local."".$comentarios;
    $validacaoHash = hash("sha256", "$validacaoString");
    if(!$link -> query("INSERT INTO lancamentos(Tipo, AnoMesDia, Local, Regiao, Comentarios, anomes, usuario) VALUES('$tipo','$anomesdia','$local','$regiao','$comentarios','$anomes', '$login_cookie')")){
        //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    }
    if(!$link -> query("INSERT INTO hashes VALUES('$anomesdia','$validacaoHash')")){
        echo '<h1>Não foi possível executar sua solicitacao na base de hash</h1><br>';
    }
    echo('<p><strong>Validação: </strong>'.$validacaoHash.'<br>');
    for ($i = 1; $i < $qtdparc; $i++) {
        $tmp_year = date("Y", strtotime($anomesdia));
        $tmp_month = date("m", strtotime($anomesdia)) + $i;
        $tmp_day = date("d", strtotime($anomesdia));
        $date = mktime(0,0,0,$tmp_month,$tmp_day, $tmp_year);
        $final = date("Y-m-d", $date);
        $anomes = date("Ym", $date);
        echo $anomes;
        echo $final;
        $validacaoString = $tipo."".$regiao."".$anomesdia."".$local."".$comentarios;
        $validacaoHash = hash("sha256", "$validacaoString");
        $imaisum = $i+1;
        if(!$link -> query("INSERT INTO lancamentos(Tipo, AnoMesDia, Local, Regiao, Comentarios, anomes, usuario) VALUES('$tipo','$anomesdia','$local','$regiao','$comentarios','$anomes', '$login_cookie')")){
            //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
        }
        echo('<p><strong>Validação: </strong>'.$validacaoHash.'<br>');
    }
    $link -> close();
}
else{
    */
    $validacaoString = $tipo."".$regiao."".$anomesdia."".$local."".$comentarios;
    $validacaoHash = hash("sha256", "$validacaoString");
    if(!$link -> query("INSERT INTO lancamentos(Tipo, AnoMesDia, Validacao, Local, Regiao, Comentarios, anomes, usuario) VALUES('$tipo','$anomesdia', '$validacaoHash', '$local','$regiao','$comentarios','$anomes', '$login_cookie')")){
        //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    }
    if(!$link -> query("INSERT INTO hashes VALUES('$anomesdia','$validacaoHash')")){
        echo '<h1>Não foi possível executar sua solicitacao na base de hash</h1><br>';
    }
    echo('<p><strong>Validação: </strong>'.$validacaoHash.'<br>');
    $link -> close();
?>
<p><string><a href="./input.php" class="btn btn-light">Voltar</a></strong>
<p><?php echo "<p> $login_cookie </p>"; ?><string><a href="./logout.php" class="btn btn-light">Deslogar</a></strong>
</body>
</html>

