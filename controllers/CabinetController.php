<?php

class CabinetController extends Controller {

    private $pageTpl = "/views/cabinet/cabinet.tpl.php";


    public function __construct()
    {
        $this->model = new CabinetModel();
        $this->view = new View();
    }

    public function index(){
  

        if(!$_SESSION['user']){
            header("Location: /");
        } else {

        $this->pageData['title']= "Кабинет";

        $contractCount = $this->model->getContractCount();
        $this->pageData['contractCount'] = $contractCount;

        
        $contractTomorrow = $this->model->getContractTomorrow();
        $this->pageData['contractTomorrow'] = $contractTomorrow;

        $contractToday = $this->model->getContractToday();
        $this->pageData['contractToday'] = $contractToday;

        $nameBD = $this->model->getName();
        $this->pageData['nameBD'] = $nameBD;



        $this->view->render($this->pageTpl, $this->pageData);

        }
    }

    public function logout(){
        session_destroy();
        header("Location: /");
    }
}