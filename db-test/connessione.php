<?php

  $servername = "localhost";
  $username = "biblioteca";
  $password = "biblio";
  $dbname = "biblios";

  /**
   * CONNESSIONE AL DB
   */
  // host, username, password, database name.
  $mysqli = new mysqli($servername, $username, $password, $dbname);

  if ($mysqli->connect_error) {
      die('Errore di connessione (' . $mysqli->connect_errno . ') '
      . $mysqli->connect_error);
  } else {
      echo 'Connesso. ' . $mysqli->host_info . "\n";

      /**
       * INSERIMENTO DATI
       */
      $sql_query = "INSERT INTO libri (codice, titolo, autore) VALUES ('8678UDH', 'Pinocchio', 'Collodi')";

      /**
       * ESEGUO LA QUERY.
       */
      if ($mysqli->query($sql_query) === TRUE) {
        echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $mysqli->error;
      }

    /**
     * CHIUDERE LA CONNESSIONE AL DB.
     */
    $mysqli->close();

  }

 ?>
