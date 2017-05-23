<?php

  // host, username, password, database name.
  $mysqli = new mysqli('localhost', 'biblioteca', 'biblio', 'biblios');

    if ($mysqli->connect_error) {
        die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
    } else {
        echo 'Connesso. ' . $mysqli->host_info . "\n";
    }

 ?>
