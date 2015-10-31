<?php

function conectar() {
    $dbhost='localhost';
    $dbuser='leoncio';
    $dbpass='sslj08120110';
    $dbname='comentario';
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

$pNombre=$_GET["nombre"];
$pComentario=$_GET["comentario"];
$pfoto="http://lorempixel.com/50/50/people/".rand(1,20);

function addcom($nombre, $comentario,$foto) {

  $sql = 'INSERT INTO comentario (nombre, comentario, foto) VALUES (:nombre,:comentario,:foto)';
  try {
    $db = conectar();
    $stmt = $db->prepare($sql);
    $stmt->bindParam('nombre', $nombre);
    $stmt->bindParam('comentario', $comentario);
    $stmt->bindParam('foto', $foto);
    $stmt->execute();

    echo $stmt->rowCount();

    $db = null;
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}
addcom($pNombre,$pComentario,$pfoto);

?>
