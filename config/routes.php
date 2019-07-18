<?php 
	
	return [
		'' => 'index/show',
		'news/([0-9]+)' => 'news/view/$1', // NewsController/view  method
		'news' => 'news/index' // NewsCintroller/index method
	]

?>