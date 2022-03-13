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
    <div align="center">
        <h1 id="titulo">Login de usuario</h1>
        <p id="subtitulo">Faça login abaixo</p>
        <br>
    </div>
    <div width="20%">
        <form method="POST" action="login.php">
            <div class="form-group">
                <label>Login:</label>
                <input class="form-control" type="text" name="login" id="login"><br>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input class="form-control" type="password" name="senha" id="senha"><br>
            </div>
            <input class="btn btn-primary" type="submit" value="entrar" id="entrar" name="entrar"><br>
        </form>
    </div>
</body>
</html>