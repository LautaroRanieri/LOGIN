<?php 
    // Varirables que traigo del index.html:
    $nombre = $_POST['usuario'];
    $pass = $_POST['contra'];

    $mysqli = new mysqli("localhost", "root", "", "registrer");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
 
  
    // Busco si esa persona existe en la tabla que indico para no repetir... 
        $sql_consulta = "select * from informacion where name='".$nombre. "' and password='" .$pass. "'" ;
        $result=mysqli_query($mysqli, $sql_consulta);
   
        if (mysqli_num_rows($result) <= 0) {
                  header("Location: no_existe.html");          // No existe la persona. Por eso va a este HTML.
           } else {
                  header("Location: ingreso_ok.html");      // El ingreso esta OK.
           };
?>



