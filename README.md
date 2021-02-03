# Proyecto_ASIR
<html>
  <head>
    <title> Sharmaa.es </title>
  </head>
  <body>
    <h1> Bienvenido a Sharmaa.es!! </h1>
        <?php

        $host = "localhost";
        $port = "5432";
        $user = "usersharmaa";
        $passw = "sharmaa";
        $db = "dbsharmaa";

        $dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$passw";

        try{

        // create a PostgreSQL database connection

        $conn = new PDO($dsn);

        // display a message if connected to the PostgreSQL successfully

        if($conn){

                echo "<h1>Conectado a <strong>$db</strong> Satisfactoriamente!</h1>";
        }

        }catch (PDOException $e){

        // report error message

                echo $e->getMessage();
}
?>
  </body>
</html>
~           
