<?php

class ContractsModel extends Model {

   public function getContractById($id){
       $result = array();

       $sql= "SELECT
       contract.idContract,
       department.departmentName,
       contract.numberContract,
       contract.nameContract,
       contract.dateConclusion
     FROM contract
       INNER JOIN department
         ON contract.department = department.idDepartment
     WHERE contract.idContract = :idContract";

     $stmt = $this->db->prepare($sql);
     $stmt->bindValue(":idContract", $id, PDO::PARAM_INT);
     $stmt->execute();
     $result=$stmt->fetch(PDO::FETCH_ASSOC);

     return $result;

       
   }

   public function saveContractsInfo($idContract,$numberContract,$nameContract,$dateConclusion) {
    $sql = "UPDATE contract SET numberContract = :numberContract, nameContract = :nameContract, dateConclusion =:dateConclusion
                            WHERE idContract = :idContract;";
    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(":numberContract", $numberContract, PDO::PARAM_INT);
    $stmt->bindValue(":nameContract", $nameContract, PDO::PARAM_STR);
    $stmt->bindValue(":dateConclusion", $dateConclusion, PDO::PARAM_STR);
    $stmt->bindValue(":idContract", $idContract, PDO::PARAM_INT);
    $stmt->execute();
    return true;

}







 
   


}