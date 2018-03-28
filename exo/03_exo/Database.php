<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class DataBase {
  private $host;
  private $dbname;
  public $user;
  private $pwd;
  private $bdd;
  function __construct($host, $dbname, $user, $pwd) {
    $this->host = $host;
    $this->dbname = $dbname;
    $this->user = $user;
    $this->pwd = $pwd;
    $this->bdd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    return $this->bdd;
  }

}
// try{
//     $db = new database('localhot','root','','first_database');
// }catch(Exception $e){
//     echo $e -> getmessage();
// }
 ?>
