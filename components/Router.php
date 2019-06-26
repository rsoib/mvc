<?php
	
class Router
{

	//Это массив в котором хранится маршруты
	
	private $routes;

	public function __construct()
	{
		// В свойстве routes сохраняем массив маршруты из файла /config/routes.php
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include_once($routesPath);
	}

	// Метод для получения строку запроса

	private function getUri()
	{
		if (!empty($_SERVER['REQUEST_URI'])) 
		{
			return trim($_SERVER['REQUEST_URI'],'/');
		}
	}

	// Анализ запроса и передача управления
	public function run()
	{	
		// Получить строку запроса
			
			$uri = $this->getUri();
				
		// Проверим наличие такого запроса ва routes.php

			foreach ($this->routes as $uriPattern => $path) {
				
				  

				foreach ($this->routes as $uriPattern => $path) {
					
					// Сравниваем $uriPattern и $uri

					if (preg_match("~$uriPattern~", $uri)) {
						
						// Определим какой контроллер и метод обрабатывает запрос

						$segments = explode('/', $path);

						// Получаем имя контроллера

						$controllerName = array_shift($segments).'Controller';
						$controllerName = ucfirst($controllerName);

						echo $controllerName;
					}
					
				}

				exit();

			}

		// Если есть совпадение, определить какой контроллер и метод обрабатывает запрос.

		// Подключить файл класса контроллера

		//Создать объект и вызвать метод.

		//print_r($this->routes);
		
	}
}

?>