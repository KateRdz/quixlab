<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $grupo = $_POST["val-grupo"];
    

  
       
        $consulta = "INSERT INTO grupos(grupo) VALUES ('$grupo')";
      
       //  $resultado=mysqli_query($link, $consulta);


        if($link->query($consulta)===TRUE){
        $dt1=$dt1=date("Y-m-d"); 

        $consulta2 = "INSERT INTO rastreos(movimiento,fecha) values ('Se insertó en tabla grupos','$dt1')";
        $resultado2=mysqli_query($link, $consulta2);
    }
}
    
?>







