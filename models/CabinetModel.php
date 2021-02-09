<?php

class CabinetModel extends Model {


    public function getName(){

        $sql = "SELECT departmentName from department WHERE idDepartment =:idDepartment";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":idDepartment", $_SESSION['user'], PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt ->fetchColumn();
        return $res;
    }



 
    /**
     * Функция подсчета кол-во контрактов в базе отделения
     */
    public function getContractCount(){
        
        $sql = "SELECT COUNT(*) from contract WHERE department =:idDepartment";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":idDepartment", $_SESSION['user'], PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt ->fetchColumn();
        return $res;
    }

    /**
     * Функция подсчета контрактов, которые закончатся завтра в бд отделения
     */

    public function getContractTomorrow(){
        $sql = "SELECT
        COUNT(*)
      FROM contract
        WHERE
        (DATE_ADD(CURDATE(), INTERVAL 1 DAY)) = dateEnd AND department =:idDepartment";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":idDepartment", $_SESSION['user'], PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt ->fetchColumn();
        return $res;
    }

     /**
     * Функция подсчета контрактов, которые закончатся сегодня в бд отделения
     */

    public function getContractToday(){
        $sql = "SELECT
        COUNT(*)
      FROM contract
        WHERE
        CURDATE() = dateEnd AND department =:idDepartment";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":idDepartment", $_SESSION['user'], PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt ->fetchColumn();
        return $res;
    }

    /**
     * Функция подсчета просроченных 
     */

    public function getContractBad(){
        $sql = "SELECT
        COUNT(*)
      FROM contract
        WHERE
        CURDATE() > dateEnd AND department =:idDepartment";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":idDepartment", $_SESSION['user'], PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt ->fetchColumn();
 
            return $res; 
      
    }



    /**
     * Функция вывода всех контрактов отделения
     */

     public function getAllContracts(){
         $sql = "SELECT * FROM contract WHERE department =:idDepartment";
         $stmt = $this->db->prepare($sql);
         $stmt->bindValue(":idDepartment", $_SESSION['user'], PDO::PARAM_STR);
         $stmt->execute();

         while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['idContract']] = $row;
        }
        

        if(isset($result)){
            return $result; 
        }
        
     }

 
   


}