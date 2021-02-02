<?php

class ContractsController extends Controller {

    private $pageTpl = "/views/cabinet/contracts.tpl.php";


    public function __construct()
    {
        $this->model = new ContractsModel();
        $this->view = new View();
    }

    public function index() {
        echo 1;
    }

   
}