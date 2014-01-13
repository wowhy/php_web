 <?php
  header("content-type:text/html;charset=UTF-8");
  echo "<h1>Hello PHP!</h1>";
  $host = getenv("MOPAAS_POSTGRESQL6307_HOST");
  $port = getenv("MOPAAS_POSTGRESQL6307_PORT");
  $dbname = getenv("MOPAAS_POSTGRESQL6307_NAME");
  $username = getenv("MOPAAS_POSTGRESQL6307_USERNAME");
  $password = getenv("MOPAAS_POSTGRESQL6307_PASSWORD");
?>
<html>
  <head>
    <title>test</title>
  </head>
  <body>
  <?php
    echo "<h1>host: $host</h1>";
    echo "<h1>port: $port</h1>";
    echo "<h1>dbname: $dbname</h1>";
    echo "<h1>username: $username</h1>";
    echo "<h1>password: $password</h1>";
  ?>

  </body>
</html>