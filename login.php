<?php
//Si quieres luego remueve este include para que metas lo de database.php porque yo no se como hacerlo jajaaja
include "inicio.php";

if ($_POST) {
    $errores=[];  
    $email=mysqli_real_escape_string($GLOBALS['con'],filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
    $password=mysqli_real_escape_string($GLOBALS['con'], $_POST['password']);  

    if(!$email){
        $errores[]="El email no puede estar vacio o ser invalido";
    }if (!$password){
        $errores[]="La contraseña no puede estar vacia";
    }
    

    if(empty($errores)){
        $query="SELECT * FROM loginusuarios WHERE email='$email'";
        $result=mysqli_query($GLOBALS['con'],$query);
        
        if ($result->num_rows){
            $usuario=mysqli_fetch_assoc($result);
            //Verificar contraseña
            $auth= password_verify($password,$usuario['password']);
           
            if ($auth) {
                $errores[]= true;
                session_start();
                $_SESSION['login'] = true;
                header("Location: admin/index.php");
                
                //llenar el arreglo de la sesion
                
            }else{
                
            $errores[]= "Contraseña incorrecta";    
            }

        }else{
            $errores[]="El usuario no existe";
            
        }


    }

}else{
    $errores[]="No se ha enviado ningun formulario";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - ArteCalenda</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h1 class="titulo" style="text-align:center; padding:2rem;">Iniciar Sesión</h1>
    <div>
        
    <?php foreach ($errores as $error) : ?>
        <?php if ($error==1) : ?>
        <p class="alerta creado"><?php echo "Usuario Autenticado"; ?></p>
        <?php else : ?>
        <p class="alerta error"><?php echo $error."<br>"; ?></p>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <form method="POST" class="formulario">
        <div class="campo">
            <label for="usuario">Email</label>
            <input type="email" id="usuario" name="email" placeholder="email" required>
        </div>
        <div class="campo">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="submit">
            <input type="submit" name="Entrega" value="Iniciar Sesión" class="boton">
        </div>
    </form>
</body>


</html>