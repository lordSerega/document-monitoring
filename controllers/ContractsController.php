<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class ContractsController extends Controller {

    private $pageTpl = "/views/cabinet/contracts.tpl.php";


    public function __construct()
    {
        $this->model = new ContractsModel();
       
        $this->view = new View();
    }

    public function index() {
      
        if(!$_SESSION['user']){
            header("Location: /");
        } else {

            $nameBD = $_SESSION['user'];
            $this->pageData['nameBD'] = $nameBD;

            $listDepartment = $this->model->findAllDepartment();
		    $this->pageData['listDepartment'] = $listDepartment;



            $this->view->render($this->pageTpl, $this->pageData);


    }

    
    }

    public function getContracts () {
        if(!$_SESSION['user']){
            header("Location: /");
            return;
        }

        if(!isset($_GET['id'])){
            echo json_encode(array("success" =>false));
        } else {
            $contactId = $_GET['id'];
            $contractInfo = json_encode($this->model->getContractById($contactId));
        
            echo $contractInfo;
      
          

        }
    }

    public function addContract() {
        if(!$_SESSION['user']) {
            header("Location: /");
            return;
        }

    
          
            $contractNumber = trim($_POST['contractNumber']);
            $contractTitle = trim($_POST['contractTitle']);
            $contractDate = trim($_POST['contractDate']);

            $stageName1 = trim($_POST['stageName1']);
            $dateBegin1 = trim($_POST['dateBegin1']);
            $dateEnd1 = trim($_POST['dateEnd1']);

            $stageName2 = trim($_POST['stageName2']);
            $dateBegin2 = trim($_POST['dateBegin2']);
            $dateEnd2 = trim($_POST['dateEnd2']);

            $stageName3 = trim($_POST['stageName3']);
            $dateBegin3 = trim($_POST['dateBegin3']);
            $dateEnd3 = trim($_POST['dateEnd3']);

            $stageName4 = trim($_POST['stageName4']);
            $dateBegin4 = trim($_POST['dateBegin4']);
            $dateEnd4 = trim($_POST['dateEnd4']);

            $stageName5 = trim($_POST['stageName5']);
            $dateBegin5 = trim($_POST['dateBegin5']);
            $dateEnd5 = trim($_POST['dateEnd5']);

            $stageName6 = trim($_POST['stageName6']);
            $dateBegin6 = trim($_POST['dateBegin6']);
            $dateEnd6 = trim($_POST['dateEnd6']);
            
            $stageName7 = trim($_POST['stageName7']);
            $dateBegin7 = trim($_POST['dateBegin7']);
            $dateEnd7 = trim($_POST['dateEnd7']);

            $stageName8 = trim($_POST['stageName8']);
            $dateBegin8 = trim($_POST['dateBegin8']);
            $dateEnd8 = trim($_POST['dateEnd8']);

            $stageName9 = trim($_POST['stageName9']);
            $dateBegin9 = trim($_POST['dateBegin9']);
            $dateEnd9  = trim($_POST['dateEnd9']);

            $stageName10 = trim($_POST['stageName10']);
            $dateBegin10 = trim($_POST['dateBegin10']);
            $dateEnd10 = trim($_POST['dateEnd10']);

            $stageName11 = trim($_POST['stageName11']);
            $dateBegin11 = trim($_POST['dateBegin11']);
            $dateEnd11 = trim($_POST['dateEnd11']);

            $stageName12 = trim($_POST['stageName12']);
            $dateBegin12 = trim($_POST['dateBegin12']);
            $dateEnd12 = trim($_POST['dateEnd12']);
            
            
            $dpList = $_POST['namesDp'];

     

      
      

            
         
          
            if($this->model->addContract($dpList, $contractNumber,$contractTitle, $contractDate,
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
            $stageName12, $dateBegin12, $dateEnd12)) {
                echo json_encode(array("success" => true));
            
             
            } else {
                echo json_encode(array("success" => false));
            
        }
    }



    public function saveContracts() {
        if(!$_SESSION['user']){
            header("Location: /");
            return;
        }
        
        if(!isset($_POST['idContract']) || trim($_POST['numberContract']) =='' || trim($_POST['nameContract']) ==''|| trim($_POST['dateConclusion']) =='' ){
            echo json_encode(array("success"=>false));
            
        }else {
            $idContract = $_POST['idContract'];
            $numberContract = $_POST['numberContract'];
            $nameContract = $_POST['nameContract'];
            $dateConclusion = $_POST['dateConclusion'];
        }

        if ($this->model->saveContractsInfo($idContract,$numberContract,$nameContract,$dateConclusion)) {
            echo json_encode(array("success"=>true));
        } else {
            echo json_encode(array("success"=>false));
        }

    }

    public function deleteContract(){
        if(!$_SESSION['user']){
            header("Location: /");
            return;
        }
        
        if(empty($_POST) || !isset($_POST['idContract']) ){
            echo json_encode(array("success"=>false));
            
        }else {
            $idContract = $_POST['idContract'];
       
        }

        if ($this->model->deleteContract($idContract)) {
            echo json_encode(array("success"=>true));
        } else {
            echo json_encode(array("success"=>false));
        }


    }





    

   
}