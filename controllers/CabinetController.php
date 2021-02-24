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

        $contractCountCurrent = $this->model->getContractCountCurrent();
        $this->pageData['contractCountCurrent'] = $contractCountCurrent;

        
        $contractTomorrow = $this->model->getContractTomorrow();
        $this->pageData['contractTomorrow'] = $contractTomorrow;

        $contractTomorrowCurrent = $this->model->getContractTomorrowCurrent();
        $this->pageData['contractTomorrowCurrent'] = $contractTomorrowCurrent;

        $contractToday = $this->model->getContractToday();
        $this->pageData['contractToday'] = $contractToday;

        $contractTodayCurrent = $this->model->getContractTodayCurrent();
        $this->pageData['contractTodayCurrent'] = $contractTodayCurrent;

        $nameBD = $this->model->getName();
        $this->pageData['nameBD'] = $nameBD;

        $contracts = $this->model->getAllContracts();
        $this->pageData['contracts'] = $contracts;

        $contractsCurrent = $this->model->getAllContractsCurrent();
        $this->pageData['contractsCurrent'] = $contractsCurrent;

        $contractsBad = $this->model->getContractBad();
        $this->pageData['contractsBad'] = $contractsBad;

        $contractsBadCurrent = $this->model->getContractBadCurrent();
        $this->pageData['contractsBadCurrent'] = $contractsBadCurrent;

        


        $this->view->render($this->pageTpl, $this->pageData);

        }
    }


    public function logout(){
        session_destroy();
        header("Location: /");
    }
}