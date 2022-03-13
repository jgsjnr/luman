
<?php 
     include 'verify.php';
     $connect = mysqli_connect("localhost", "root", "1234", "luman");  
     $query ="SELECT * FROM lancamentos WHERE usuario = '$login_cookie' ORDER BY Id desc";
     $result = mysqli_query($connect, $query);  
?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          <title>Sistema Logistica Humanitaria Luman</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
          <!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:100%;">  
                <h2 align="center">Exportar os arquivos em CSV</h2>  
                <h3 align="center">Analítico de Eventos</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-dark table-striped">  
                          <tr>  
                               <th width="5%">Id</th>  
                               <th width="25%">Tipo</th>  
                               <th width="10%">AnoMesDia</th>  
                               <th width="20%">Validacao</th>  
                               <th width="13%">Local</th>
                               <th width="5%">Comentarios</th>
                               <th width="5%">anomes</th>
                               <th width="5%">Usuario</th>
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["Id"]; ?></td>  
                               <td><?php echo $row["Tipo"]; ?></td>   
                               <td><?php echo $row["AnoMesDia"]; ?></td>  
                               <td><?php echo $row["Validacao"]; ?></td>  
                               <td><?php echo $row["Local"]; ?></td>
                               <td><?php echo $row["Comentarios"]; ?></td>
                               <td><?php echo $row["anomes"]; ?></td>
                               <td><?php echo $row["usuario"]; ?></td>
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div> 
           <p><string><a href="./menu.php" class="btn btn-light">Voltar</a></strong>
           <p><?php echo "<h1> $login_cookie </h1>"; ?><string><a href="./logout.php" class="btn btn-light">Deslogar</a></strong>
      </body>  
 </html>