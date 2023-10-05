<?php 
    $nombre = $_POST["nombre"];
    $pass = $_POST["contra"];
    $correo = $_POST["correo"];

    // Conecto con la base de datos:      
    $mysqli = new mysqli("localhost", "root", "", "registrer");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
 
    // Busco si esa persona existe en la tabla que indico para no repetir... 
        $sql_consulta = "select * from informacion where name='".$nombre. "' and password='" .$pass. "'" ;
       
        $sql_alta = "insert informacion (name, email, password) Values('" .$nombre. "', '" .$correo ."','" .$pass. "')";        


        $result=mysqli_query($mysqli, $sql_consulta);

        if (mysqli_num_rows($result) <= 0) {
                  mysqli_query($mysqli, $sql_alta);   //DOY DE ALTA A LA PERSONA.
                  //$result2=mysqli_query($mysqli, $sql_alta);
                  header("Location: alta_ok.html");          // Alta Ok.
           } else {
                  header("Location: alta_duplicada.html");      // Cliente duplicado.
           };

 ?>