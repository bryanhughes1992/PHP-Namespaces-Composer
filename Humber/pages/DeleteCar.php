<?php
use Humber\Model\{DataBase, Cars};
require_once '../vendor/autoload.php';
//require_once '../models/Cars.php';
//require_once '../models/DataBase.php';

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $db = DataBase::getDB();

  $dbCar = new Cars();
  $clientCar = $dbCar->deleteCar($id, $db);
  if($clientCar) {
    header('Location: ../index.php');
  } else {
    echo "DELETION ERROR";
  }
}