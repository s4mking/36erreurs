<?php 
namespace Model;
use ThirtySix\Connexion as pdo;

class Category{
 
  const TABLE_NAME = "ce16_category";

  public static function getById($id){
    // var_dump($id);
    $pdo = new pdo;
    $pdo=$pdo->getInstance();
    $q = $pdo->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE id = :id');
    
    $q->bindParam('id',$id);
    $q->execute();
    return $q->fetch();
    
  }

}