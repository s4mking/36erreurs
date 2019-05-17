<?php
namespace Controller;
use ThirtySix\Connexion as pdo;
use Model\Nominee;
use Model\User;
use Model\Category;

class CesarController{
  
  public function gagnantsAction(){
    $pdo = new pdo;
    $pdo= $pdo->getInstance();
    $winners = Nominee::getWinners($pdo);

    $bestplayers = User::getBest($pdo);
  
    $categories = [];
    
    foreach ($winners as $winner) {     
      $categories[$winner['category_id']] = Category::getById($winner['category_id']);
    }
    include "./winners.php";
  }
}