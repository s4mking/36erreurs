<?php 
namespace Model;
use ThirtySix\Connexion as pdo;

class Nominee{

  
  const TABLE_NAME = "ce16_nominee";

  public static function getById($id){
    $pdo = new pdo;
    $pdo=$pdo->getInstance();
    $q = $pdo->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE nominee_id = :id');
    $q->bindParam('nominee_id',$id);
    return $q->fetch();
  }

  public static function getWinners(){
    $pdo = new pdo;
    $pdo=$pdo->getInstance();
    $q = $pdo->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE winner = 1');
    $winners = $q->execute();
    return $q->fetchAll();
  }
}