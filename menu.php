<!DOCTYPE html>
<?php include 'verify.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Logistica Humanitaria Luman</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <h1 id="titulo">Menu de acesso</h1>
        <p id="subtitulo"></p>
        <br>
    </div>
    <div>
        <a href="input.php" class="btn btn-success">Inserir</a>
        <a href="mod.php" class="btn btn-warning">Modificar</a>
        <a href="del.php" class="btn btn-danger">Deletar</a>
        <a href="vis.php" class="btn btn-info">Visualizar</a>
    </div>
    <p><?php echo "<h1> $login_cookie </h1>"; ?><string><a href="./logout.php" class="btn btn-light">Deslogar</a></strong>
</body>
</html>