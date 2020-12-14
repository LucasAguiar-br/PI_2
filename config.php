<?php
  define('DB_HOST','DESKTOP-LJC50H1\SQLEXPRESS');
  define('DB_USER','sa');
  define('DB_PASS','123');
  define('DB_NAME','PI_EAGLE');
  define('DB_DRIVE','sqlsrv');
  
  $pdoConfig = DB_DRIVE . ":". "Server=" . DB_HOST . ";";
  $pdoConfig .= "Database=".DB_NAME. ";";
  
  try {
      $objBanco = new PDO($pdoConfig, DB_USER, DB_PASS);
  
  
  } catch (PDOException $objErro)  {
  
      echo "SGND Indisponível:" . $objErro->getMessage();
  
      exit();
      
  }