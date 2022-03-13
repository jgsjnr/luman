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

    <div>
        <h1 id="titulo">Remover informações</h1>
        <p id="subtitulo">Insira a hash abaixo</p>
        <br>
    </div>
    <form action="db_del.php" method="post">
        <p><strong>Hash:</strong> <br><input type="text" name="hash" class="form-control"/></p>
        <p><input type="submit" class="btn btn-success" value="Deletar"/></p> <br>
       </form> 
       <p><string><a href="./menu.php" class="btn btn-light">Voltar</a></strong>
       <p><?php echo "<p> $login_cookie </p>"; ?><string><a href="./logout.php" class="btn btn-success">Deslogar</a></strong>
</body>
</html>