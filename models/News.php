<?php 

include_once(ROOT.'/components/Db.php');

class News
{

		/* 
			Получение одной новости
		*/

		public static function getNewsItemById($id)
		{
			if ($id) {

				$db = Db::getConnection();

				$newsItem = array();

				$result = $db->query("SELECT * FROM news 
												WHERE id=$id");

				$result->setFetchMode(PDO::FETCH_ASSOC);

				$newsItem = $result->fetch();
				
				return $newsItem;
			}
		} 


		/*
			Получение все новости
		*/

		public static function getNewsList()
		{
			$db = Db::getConnection();

			$newsList = array();

			$result = $db->query('SELECT * FROM news 
												ORDER BY id desc
												LIMIT 10');

			$i = 0;

			while ($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['title'] = $row['title'];
				$newsList[$i]['content'] = $row['content'];
				$newsList[$i]['author_name'] = $row['author_name'];
				$newsList[$i]['date'] = $row['date'];
				$newsList[$i]['short_content'] = $row['short_content'];

				$i++;
			}

			return $newsList;
		} 
}



?>