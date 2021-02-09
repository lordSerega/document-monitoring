<?php

/**
 * Класс маршрутизации
 **
 */
class Routing {

	public static function buildRoute() {

		/*Контроллер и action по умолчанию*/
		$controllerName = "IndexController";
		$modelName = "IndexModel";
		$action = "index";

		$route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
		

		$i = count($route)-1;


		while($i>0) {
			if($route[$i] != '') {
				if(is_file(CONTROLLER_PATH. ucfirst($route[$i]). "Controller.php")) {
					$controllerName = ucfirst($route[$i]). "Controller";
					$modelName = ucfirst($route[$i]). "Model";
					break;
				} else {
					$action = $route[$i];
				}
			}
			$i--;
		}


		require_once CONTROLLER_PATH . $controllerName . ".php"; //IndexController.php
		require_once MODEL_PATH . $modelName . ".php"; //IndexModel.php		

		$controller = new $controllerName();
		$controller->$action(); // $controller->index();


	}

	public function errorPage() {

	}


}