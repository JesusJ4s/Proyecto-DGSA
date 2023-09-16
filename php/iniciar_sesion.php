<?php
    // session_start();
    // ob_start();


    $dato1 = $_POST['usuario'];
    $dato2 = $_POST['passLogin'];
    $dato3 = $_POST['ingreso'];
    if ($dato3=="ingreso") {
        // $iniciar=0;
        // $ingreso=$_POST['ingreso'];

        // Recibir la información de ingreso a la intranet:
        // $user = $_POST['usuario'];
        // Pasar nombre de usuario a mayúsculas
        // $nameUPPER = strtoupper($user);
        // $pass = $_POST['passLogin'];

        // // ABRIR CONEXION PARA PODER HACER LA CONSULTA
            // include("abrir_conexion.php");

            // $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nameUPPER' AND contraseña = '$pass'");
            // while($consulta = mysqli_fetch_array($verificar))
            // {
            //     $valorCargo=$consulta['usuario_rol_id'];
            //     $valorFinal=$consulta['cedula'];
            //     $nombre=$consulta['nombre']." ".$consulta['apellido'];
            //     $iniciar++;
            // }


            // if($iniciar<>0){

            //     $_SESSION['sesion_exito']=1; //1 - Inicio sesion
            //     $_SESSION['cedula_var_global']=$valorFinal;
            //     $_SESSION['nombre']=$nombre;
            //     if ($valorCargo==1) {
            //         $_SESSION['nivel_usuario']=1; //ADMIN PODER: ADMIN
            //     }
            //     if ($valorCargo==4) {
            //         $_SESSION['nivel_usuario']=1; //ING INFOR PODER: ADMIN
            //     }
            //     if ($valorCargo==2) {
            //         $_SESSION['nivel_usuario']=2; //JEF DPTO PODER: ADMIN-
            //     }
            //     if ($valorCargo==3) {
            //         $_SESSION['nivel_usuario']=100; //COMUN PODER: NADA
            //     }
            
        echo " Ahí debería haber algo";
            
        // // CONSULTA FINALIZADA, CERRAR SESION
        // include("cerrar_conexion.php");

            
        // }
        // else {
        //     http_response_code(500);
        // }
    }else{
        http_response_code(500);
    }

    

?>