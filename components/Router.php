<?php
	
class Router
{

	//Это массив в котором хранится маршруты
	
	private $routes;

	public function __construct()
	{
		// В свойстве routes сохраняем массив маршруты из файла /config/routes.php
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
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
				
		// Провериь наличие такого запроса ва routes.php

		// Если есть совпадение, определить какой контроллер и метод обрабатывает запрос.

		// Подключить файл класса контроллера

		//Создать объект и вызвать метод.

		//print_r($this->routes);
		
	}
}

?>