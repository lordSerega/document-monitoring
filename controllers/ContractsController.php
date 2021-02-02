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

            $this->view->render($this->pageTpl, $this->pageData);


    }

    
    }
   
}