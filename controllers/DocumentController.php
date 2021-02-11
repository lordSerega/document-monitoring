<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class DocumentController extends Controller {

    private $pageTpl = "/views/document.tpl.php";


    public function __construct()
    {
        $this->model = new DocumentModel();
       
        $this->view = new View();
    }

    
    public function index() {
      
   

        
            $this->view->render($this->pageTpl, $this->pageData);


    

    
    }


}