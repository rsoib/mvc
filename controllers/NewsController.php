<?php 

include_once(ROOT.'/models/News.php');

class NewsController 
{

	public function actionIndex()
	{
		// Обращаемся к моделью News и его метод getNewsList
		
			$newsList = array();
			$newsList = News::getNewsList();

			print_r($newsList);

			return true;

	}

	public function actionView($category, $id)
	{
		echo $category;
		echo "<br>".$id;
		
		return true;	
	}


} 

?>