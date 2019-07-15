<?php 

include_once(ROOT.'/models/News.php');

class NewsController 
{

	public function actionIndex()
	{
		// Обращаемся к моделью News и его метод getNewsList
		
			$newsList = array();
			$newsList = News::getNewsList();

			
			echo "<pre>";
			print_r($newsList);

			return true;

	}

	public function actionView($id)
	{

		$newsItem = array();

		$newsItem = News::getNewsItemById($id);
		
		echo "<pre>";
		print_r($newsItem);
		return true;	
	}


} 

?>