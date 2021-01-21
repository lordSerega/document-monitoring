<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class IndexModel extends Model {
 
 

/**
 * Функция вывода из БД всех отделений
 */
 public  function findAllDepartment(){
    $sql = "SELECT * FROM department";
    $result = array();
    
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
       $result[$row['idDepartment']] = $row;

    }
    return $result;

 }

 /**
 * Функция соответствия пароля отделения
 */
public function checkUser(){
    $idDepartment = $_POST['department'];
    $password = $_POST['password'];
 

   $sql = 'SELECT *
   FROM department
   WHERE idDepartment = :idDepartment AND password = :password';

$stmt = $this->db->prepare($sql);
$stmt->bindValue(":idDepartment", $idDepartment, PDO::PARAM_STR);
$stmt->bindValue(":password", $password, PDO::PARAM_STR);
$stmt->execute();


$res = $stmt->fetch(PDO::FETCH_ASSOC);



if(!empty($res)) {
   $_SESSION['user'] = $_POST['department'];
   header("Location: /cabinet");
} else {
   return false;
}

}





}