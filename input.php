<!DOCTYPE html>
<?php include 'verify.php'; ?>
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
    <div>
        <h1 id="titulo">Inscrição de evento</h1>
        <p id="subtitulo">Insira as informações abaixo</p>
        <br>
    </div>
    <form action="db.php" method="post">
        <p><strong>Tipo de ocorrido:</strong> <br> </p>
        <select name="Tipo" class="form-control"> 
            <option value="tempestade">Tempestade</option> 
            <option value="enchente">Enchente</option> 
            <option value="desabamento">Desabamento</option> 
            <option value="energia">Energia</option> 
            <option value="tsunami">Tsunami</option> 
            <option value="terremoto">Terremoto</option> 
            <option value="desmoronamento">Desmoronamento</option> 
            <option value="inundacao">Inundação</option> 
        </select>
        <p><strong>Ano/Mes/Dia:</strong> <br><input type="date" name="anomesdia" class="form-control"/></p>
        <p><strong>Região:</strong> <br> </p>
        <select name="Regiao" class="form-control"> 
            <option value="sp">SP</option> 
            <option value="mg">MG</option> 
            <option value="rj">RJ</option> 
            <option value="ba">BA</option> 
            <option value="ce">CE</option> 
            <option value="df">DF</option> 
            <option value="am">AM</option> 
        </select>
        <p><strong>Local: </strong> <br> <input type="text" name="Local" class="form-control"/></p>
        <p><strong>Comentarios :</strong> <br> <textarea type="text" name="Comentarios" class="form-control" rows="3"/></textarea></p>
        <p><strong>Parcelado:</strong> <br> </p>
        <p><input type="submit" class="btn btn-success" value="Enviar"/></p> <br>
       </form> 
       <p><string><a href="./menu.php" class="btn btn-light">Voltar</a></strong>
       <p><?php echo "<h1> $login_cookie </h1>"; ?><string><a href="./logout.php" class="btn btn-light">Deslogar</a></strong>
</body>
</html>