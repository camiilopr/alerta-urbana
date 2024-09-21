<?php 

   include 'Conexion.php';

   $Fecha = $_POST['Fecha'];
   $Hora = $_POST['Hora'];
   $Tipo_incidente = $_POST['Tipo_incidente'];
   $Descripcion = $_POST['Descripcion'];

   $query = "INSERT INTO reporte(Fecha, Hora, Tipo_incidente, Descripcion) 
             VALUES ('$Fecha', '$Hora', '$Tipo_incidente', '$Descripcion')";

            $ejecutar = mysqli_query($Conexion, $query);   
            if($ejecutar){
             echo ' 
             <script>
             alert("Registrado correctamente");
             window.location = "../alertaurbana/reporta.html";
             </script>
             ';
            }else {
             echo ' 
             <script>
             alert("Intentelo de nuevo, no se registro su reporte");
             window.location = "../reporta.html";
             </script>
            ';
         }
         
         mysqli_close($conexion);
   ?>