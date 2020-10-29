<?php 

function getDB() {
    $dbHost = 'localhost';
    $dbName = 'carrental';
    $dbUser = 'root';
    $dbPass = '';

    $db = new PDO( "mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}

function query($sql, $values = null) {
    $db = getDB();
    if ( empty($values) ) {
        $query = $db->query($sql);
    } else {
        $query = $db->prepare($sql);
        $query->execute($values);
    }

    return $query;
}

function select($sql, $values = null) {
    $query = query($sql, $values);
    if ( $query ) {
      // meer dan 1 row dus fetchAll
      $output = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
      // false
      $output = false;
    }
    return $output;
}

function selectOne($sql, $values = null) {
    $query = query($sql, $values);
    if ( $query && $query->rowCount() == 1 ) {
      $output = $query->fetch(PDO::FETCH_ASSOC);
    } else {
      // false
      $output = false;
    }
    return $output;
}




