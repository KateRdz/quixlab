<?php  
	
	 $link = new mysqli("localhost","root","","reportes_padres");
	 $salida = "";
	 $sql = "select id,grupo from grupos;";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "select id,grupo from grupos WHERE grupo LIKE '%".$q."%'";
		
	}
	$resultado = $link -> query($sql);
	echo (mysqli_error ($link));
/*	$resultado = $conn->query($sql);
	if (!$resultado) {
    trigger_error('Invalid query: ' . $conn->error);
	}*/
	if($resultado -> num_rows > 0){
		$salida.= "<table class='table table-xs mb-0'>
					 <thead>
					 	<tr>
                            <th>id</th>
                            <th>Grupos</th>
                          
                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['id']."</td>
                                    <td>".$ver['grupo']."</td>
                                  
                                    
                                </tr>";
                    }
                    $salida.="</tbody></table>";
	} else {
		$salida.= "vacio";

	}
	echo $salida;
	$link -> close();
?>