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
        // Consultamos la tabla "xx"
        $sql = 'SELECT * from xx';
        foreach ($conn->query($sql) as $row) {
                // siendo tres las columnas: nn1, nn2, nn3
           echo $row['nn1'] . "<br />"; 
           echo $row['nn2'] . "<br />"; 
           echo $row['nn3'] . "<br /";
        }
        ?>
  </body>
</html>
