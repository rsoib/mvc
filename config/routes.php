<?php 
	
	return [
		'news/([0-9]+)' => 'news/view/$1', // NewsController/view  method
		'news' => 'news/index', // NewsController/index method
		'' => 'index/show', //IndexController/show method --main page --
	]

?>