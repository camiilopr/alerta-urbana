<?php
        include 'Conexion.php';

        $Correo_electronico = $_POST['Correo_electronico'];
        $Contrasena = $_POST ['Contrasena'];

        $validar_registro =mysqli_query($Conexion, "SELECT * FROM crear_cuenta WHERE Correo_electronico='$Correo_electronico'
        and Contrasena='$Contrasena'");
         
         if(mysqli_num_rows($validar_registro) > 0){
            header("location: Paginaprincipal.html");
        }else{
            echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "Acceder.html";
                </script>
                ';
                exit;
         }
?>