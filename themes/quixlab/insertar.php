<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $nombre = $_POST["val-username"];
    $telefono = $_POST["val-phoneus"];
    $notas = $_POST["val-suggestions"];
    $grupo = $_POST["val-skill"];
    $tutor = $_POST["val-skill2"];

  
       
        $consulta = "INSERT INTO alumnos(nombre,telefono,notas,id_grupo,id_tutor) VALUES ('$nombre', '$telefono', '$notas','$grupo','$tutor')";
      
       //  $resultado=mysqli_query($link, $consulta);



        if($link->query($consulta)===TRUE){
        $dt1=date("Y-m-d"); 

        $consulta2 = "INSERT INTO rastreos(movimiento,fecha) values ('Se insertó en tabla alumnos','$dt1')";
        $resultado2=mysqli_query($link, $consulta2);
    }
}
    
?>







