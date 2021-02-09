<?php

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



    

   
}