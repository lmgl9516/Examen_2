<?php
$dbhost='54.186.149.146';
    $dbuser='root';
    $dbpass='sslj08120110';
    $dbname='comentario';
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
    echo "CONECTADO";
?>