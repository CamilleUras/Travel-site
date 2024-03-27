<?php
require_once dirname(__DIR__) . '/config/db.config.php';


function getPDOLink($config){

  $dsn = 'mysql:dbname='.$config['database'].'; host='.$config['host'].'; port='.$config['port'];

  try {

   //echo '<h1>Tu es connecté à la base de donnée</h1>';
    return new PDO($dsn, $config['username'], $config['password']);

  } catch (PDOException $e ) {

    exit($e->getMessage());

  }
}

?>
