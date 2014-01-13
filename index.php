 <?php
  header("content-type:text/html;charset=UTF-8");
  
  $host = getenv("MOPAAS_MYSQL6309_HOST");
  $port = getenv("MOPAAS_MYSQL6309_PORT");
  $dbname = getenv("MOPAAS_MYSQL6309_NAME");
  $username = getenv("MOPAAS_MYSQL6309_USERNAME");
  $password = getenv("MOPAAS_MYSQL6309_PASSWORD");
?>
<html>
  <head>
    <title>test</title>
  </head>
  <body>
    <h2>Hello, World!</h2>
    <p>
<?php
    $conn = mysql_connect("$host:$port", $username, $password);
    if($conn)
    {
      echo 'Connected successfully';
      mysql_close($conn);
    }
?>
    </p>
  </body>
</html>