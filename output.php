<?php
include 'verify.php';
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "1234", "luman");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Id', 'Tipo', 'AnoMesDia', 'Validacao', 'Local', 'Regiao', 'Comentarios', 'anomes', 'usuario'));  
      $query = "SELECT * from lancamentos ORDER BY Id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>