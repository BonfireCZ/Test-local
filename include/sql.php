<?php 

$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

$debug_info.="MySQL connection: ".$mysqli->host_info."<br/>";

if ($mysqli->query("SET NAMES utf8") === TRUE) {
    $debug_info.="MySQL set to UTF8.<br/>";
}

// na konci $mysqli->close();

?>