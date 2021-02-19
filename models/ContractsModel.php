<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

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

     $sql1 = "SELECT * from stage WHERE contracrt = :idContract";
     $stmt1 = $this->db->prepare($sql1);
     $stmt1->bindValue(":idContract", $id, PDO::PARAM_INT);
     $stmt1->execute();
  
     while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
			$stageContract[$row['id_stage']] = $row;
        }
  

        if(isset($stageContract)){
            return $stageContract; 
        }


       
   }

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



   public function getStagesById($id) {

    $sql=  "SELECT * from stage WHERE contract = :idContract";
    $stmt = $this ->db->prepare($sql);
    $stmt->bindValue(":idContract", $id, PDO::PARAM_INT);
    $stmt->execute();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $stageContract[$row['id_stage']] = $row;
    }
    if (isset($stageContract)){
      return $stageContract;
    }
   }

   public function getCountStageById($id){

    $sql= "SELECT
    COUNT(*) AS 'stageCount'
  FROM stage
  INNER JOIN contract 
     ON stage.contracrt = contract.idContract
  WHERE contract.idContract = :idContract";

  $stmt = $this->db->prepare($sql);
  $stmt->bindValue(":idContract", $id, PDO::PARAM_INT);
  $stmt->execute();
  $result=$stmt->fetch(PDO::FETCH_ASSOC);

  return $result;

}


   public function addContract( $dpList, $contractNumber,$contractTitle, $contractDate,
   $stageName1, $dateBegin1, $dateEnd1,
   $stageName2, $dateBegin2, $dateEnd2,
   $stageName3, $dateBegin3, $dateEnd3,
   $stageName4, $dateBegin4, $dateEnd4,
   $stageName5, $dateBegin5, $dateEnd5,
   $stageName6, $dateBegin6, $dateEnd6,
   $stageName7, $dateBegin7, $dateEnd7,
   $stageName8, $dateBegin8, $dateEnd8,
   $stageName9, $dateBegin9, $dateEnd9,
   $stageName10, $dateBegin10, $dateEnd10,
   $stageName11, $dateBegin11, $dateEnd11,
   $stageName12, $dateBegin12, $dateEnd12) {




    foreach($dpList as $value) {

      $sql = "INSERT INTO contract(department, numberContract, nameContract, dateConclusion)
    VALUES(:department, :numberContract, :nameContract, :dateConclusion)
    ";
      $stmt = $this->db->prepare($sql);
      $stmt->bindValue(":department", $value, PDO::PARAM_INT);
      $stmt->bindValue(":numberContract", $contractNumber, PDO::PARAM_INT);
      $stmt->bindValue(":nameContract", $contractTitle, PDO::PARAM_STR);
      $stmt->bindValue(":dateConclusion", $contractDate, PDO::PARAM_STR);
      $stmt->execute();

      $sql1= "SELECT contract.idContract FROM contract WHERE contract.numberContract = :num and contract.department =:dp";

      $stmt1 = $this->db->prepare($sql1);
      $stmt1->bindValue(":num", $contractNumber, PDO::PARAM_INT);
      $stmt1->bindValue(":dp", $value, PDO::PARAM_INT);
      $stmt1->execute();
      $idCont=$stmt1->fetchColumn();

      

        $status = "В процессе";
      
       
        $sql2 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage, status) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage, :status)";
        $stmt2 = $this->db->prepare($sql2);
        $stmt2->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt2->bindValue(":dtSt_begin",$dateBegin1, PDO::PARAM_STR);
        $stmt2->bindValue(":dtSt_end", $dateEnd1, PDO::PARAM_STR);
        $stmt2->bindValue(":status", $status, PDO::PARAM_STR);
        $stmt2->bindValue(":number_stage", $stageName1, PDO::PARAM_INT);
        $stmt2->execute();

        $sql3 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt3 = $this->db->prepare($sql3);
        $stmt3->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt3->bindValue(":dtSt_begin",$dateBegin2, PDO::PARAM_STR);
        $stmt3->bindValue(":dtSt_end", $dateEnd2, PDO::PARAM_STR);
        $stmt3->bindValue(":number_stage", $stageName2, PDO::PARAM_INT);
        $stmt3->execute();

        $sql4 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt4 = $this->db->prepare($sql4);
        $stmt4->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt4->bindValue(":dtSt_begin",$dateBegin3, PDO::PARAM_STR);
        $stmt4->bindValue(":dtSt_end", $dateEnd3, PDO::PARAM_STR);
        $stmt4->bindValue(":number_stage", $stageName3, PDO::PARAM_INT);
        $stmt4->execute();

        $sql5 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt5 = $this->db->prepare($sql5);
        $stmt5->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt5->bindValue(":dtSt_begin",$dateBegin4, PDO::PARAM_STR);
        $stmt5->bindValue(":dtSt_end", $dateEnd4, PDO::PARAM_STR);
        $stmt5->bindValue(":number_stage", $stageName4, PDO::PARAM_INT);
        $stmt5->execute();

        $sql6 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt6 = $this->db->prepare($sql6);
        $stmt6->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt6->bindValue(":dtSt_begin",$dateBegin5, PDO::PARAM_STR);
        $stmt6->bindValue(":dtSt_end", $dateEnd5, PDO::PARAM_STR);
        $stmt6->bindValue(":number_stage", $stageName5, PDO::PARAM_INT);
        $stmt6->execute();

        $sql7 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt7 = $this->db->prepare($sql7);
        $stmt7->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt7->bindValue(":dtSt_begin",$dateBegin6, PDO::PARAM_STR);
        $stmt7->bindValue(":dtSt_end", $dateEnd6, PDO::PARAM_STR);
        $stmt7->bindValue(":number_stage", $stageName6, PDO::PARAM_INT);
        $stmt7->execute();

        $sql8 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt8 = $this->db->prepare($sql8);
        $stmt8->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt8->bindValue(":dtSt_begin",$dateBegin7, PDO::PARAM_STR);
        $stmt8->bindValue(":dtSt_end", $dateEnd7, PDO::PARAM_STR);
        $stmt8->bindValue(":number_stage", $stageName7, PDO::PARAM_INT);
        $stmt8->execute();

        $sql9 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt9 = $this->db->prepare($sql9);
        $stmt9->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt9->bindValue(":dtSt_begin",$dateBegin8, PDO::PARAM_STR);
        $stmt9->bindValue(":dtSt_end", $dateEnd8, PDO::PARAM_STR);
        $stmt9->bindValue(":number_stage", $stageName8, PDO::PARAM_INT);
        $stmt9->execute();

        $sql10 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt10 = $this->db->prepare($sql10);
        $stmt10->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt10->bindValue(":dtSt_begin",$dateBegin9, PDO::PARAM_STR);
        $stmt10->bindValue(":dtSt_end", $dateEnd9, PDO::PARAM_STR);
        $stmt10->bindValue(":number_stage", $stageName9, PDO::PARAM_INT);
        $stmt10->execute();

        $sql11 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt11 = $this->db->prepare($sql11);
        $stmt11->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt11->bindValue(":dtSt_begin",$dateBegin10, PDO::PARAM_STR);
        $stmt11->bindValue(":dtSt_end", $dateEnd10, PDO::PARAM_STR);
        $stmt11->bindValue(":number_stage", $stageName10, PDO::PARAM_INT);
        $stmt11->execute();

        $sql12 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt12 = $this->db->prepare($sql12);
        $stmt12->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt12->bindValue(":dtSt_begin",$dateBegin11, PDO::PARAM_STR);
        $stmt12->bindValue(":dtSt_end", $dateEnd11, PDO::PARAM_STR);
        $stmt12->bindValue(":number_stage", $stageName11, PDO::PARAM_INT);
        $stmt12->execute();

        $sql13 = " INSERT INTO stage (contracrt,dtSt_begin,dtSt_end,number_stage) VALUES(:id, :dtSt_begin, :dtSt_end, :number_stage)";
        $stmt13 = $this->db->prepare($sql13);
        $stmt13->bindValue(":id", $idCont, PDO::PARAM_INT);
        $stmt13->bindValue(":dtSt_begin",$dateBegin12, PDO::PARAM_STR);
        $stmt13->bindValue(":dtSt_end", $dateEnd12, PDO::PARAM_STR);
        $stmt13->bindValue(":number_stage", $stageName12, PDO::PARAM_INT);
        $stmt13->execute();

     

    }

    
   
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

public function deleteContract($idContract) {
  $sql= "DELETE FROM contract WHERE idContract =:idContract";

  $stmt = $this->db->prepare($sql);
  $stmt->bindValue(":idContract", $idContract, PDO::PARAM_INT);
  $stmt->execute();
  $count = $stmt->rowCount();
  if ($count>0){
    return true;
  } else {
    return false;
  }

}







 
   


}