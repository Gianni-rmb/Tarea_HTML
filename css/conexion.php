<?php
//MYSQL
$con = mysql_connect('localhost', 'user', 'pass');

mysql_select_db('nombreBaseDatos');
$sql = "INSERT INTO estudiantes VALUES(".$id.",'".$nombre."','".$apellidos."',".$edad.",'".$correo."')";

$res = mysql_query($sql);


//POSTGRES

$user = 'usuario';
$passwd = 'clave';
$db = 'nombreBaseDatos';
$port = 5432;
$host = 'localhost';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";

$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
echo "Conexion exitosa<br>";

# Ejecutando la Consulta
if ($_POST) {
  $result = pg_query($cnx, "INSERT INTO estudiantes (codigo,nombres,apellidos,edad,correo) VALUES (".$id.",'".$nombre."','".$apellidos."',".$edad.",'".$correo."'));
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }
}
$sql = "INSERT INTO estudiantes VALUES(".$id.",'".$nombre."','".$apellidos."',".$edad.",'".$correo."')";

?>