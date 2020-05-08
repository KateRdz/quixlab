<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $nombre = $_POST["val-username"];
    $correo2 = $_POST["correo"];
    $telefono = $_POST["val-phoneus"];

  
       
      $consulta = "INSERT INTO tutores(nombre,correo,telefono) VALUES ('$nombre', '$correo2', '$telefono')";
      
     //$resultado=mysqli_query($link, $consulta);
      if($link->query($consulta)===TRUE){
        $dt1=$dt1=date("Y-m-d"); 

        $consulta2 = "INSERT INTO rastreos(movimiento,fecha) values ('Se insertó en tabla tutores','$dt1')";
        $resultado2=mysqli_query($link, $consulta2);
    }
}
    
?>







