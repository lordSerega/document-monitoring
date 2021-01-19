<?php


class IndexController extends Controller {

	private $pageTpl = '/views/main.tpl.php';


	public function __construct() {
		$this->model = new IndexModel();
		$this->view = new View();
	


	}


	public function index() {
		$this->pageData['title'] = "Вход в личный кабинет";
		

	
	

		

		$this->pageData['dname'] = IndexModel::loadDepartment();
		
		$this->view->render($this->pageTpl, $this->pageData);
	
	

	}


}