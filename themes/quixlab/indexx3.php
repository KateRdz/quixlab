<?php  
	
	 $link = new mysqli("localhost","root","","reportes_padres");
	 $salida = "";
	 $sql = "select id_tutor,nombre,correo,telefono from tutores";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "select id_tutor,nombre,correo,telefono from tutores WHERE nombre LIKE '%".$q."%'";
		
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
                            <th>Nombre del Tutor</th>
                            <th>Correo Electrónico del Tutor</th>
                            <th>Teléfono del Tutor</th>

                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['id_tutor']."</td>
                                    <td>".$ver['nombre']."</td>                                
                                    <td>".$ver['correo']."</td>
                                    <td>".$ver['telefono']."</td>
                                    
                                </tr>";
                    }
                    $salida.="</tbody></table>";
	} else {
		$salida.= "vacio";

	}
	echo $salida;
	$link -> close();
?>