

<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo Usuario</title>
    </head>
    <body>
        <form action="" method="post">
            <p>Nombre de usuario: <input type="text" name="nombre"></p>
            <p>Password: <input type="password" name="pass"></p>
            <p>Email: <input type="email" name="email"></p>
            <input type="submit" name="alta" value="registrarse">
            
        </form>
        
        <?php
        require_once 'bbdd_steam.php';
        if(isset($_POST['alta'])){
            $nusuario=$_POST['nombre'];
            if(existeusuario($nusuario)==true){
                echo '<p> ya existe este nombre de usuario en la bbdd </p>';
                
                
            }  else {
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                insertuser($nusuario, $pass, $email);
                
            }
                
        }
        
        ?>
        <p><a href="index.php">Inicio</a></p>
    </body>
</html>