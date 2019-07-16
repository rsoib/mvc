<table border="1px">
	
	<tr>
		<td>Title</td>
		<td>Text</td>
		
	</tr>
	
	<?php foreach ($newsList as $newsItem):?>
	<tr>
		<td><?php echo $newsItem['title'] ?></td>
		<td><?php echo $newsItem['short_content'] ?></td>
	
	</tr>
	<?php endforeach ?>
</table>