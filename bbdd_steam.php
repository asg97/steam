<?php

function conectar($database){


	$conexion = mysqli_connect("localhost", "root", "", "$database") or die ("No se ha podido conectar con la BBDD");

	return $conexion;
}


function desconectar($conexion){


	mysqli_close($conexion);

}

function existeusuario($nombre_usuario){
    
    $conexion=  conectar("steam");
    $consulta= "select*from user where username='$nombre_usuario';";
    $resultado = mysqli_query($conexion, $consulta);
    $contador=  mysqli_num_rows($resultado);
    desconectar($conexion);
    if($contador==0){
        return false;
    }  else {
    return true;    
    }
    
}
function insertuser($nusuario,$pass,$email){
    $conexion= conectar('steam');
    $insert ="insert into user values ('$nusuario' , '$pass', '$email', 'usuario')";
    if(mysqli_query($conexion, $insert)){
        echo '<p> usuario registrado </p>';
        
    }  else {
     echo mysqli_error($conexion);
    }
    desconectar($conexion);
}
