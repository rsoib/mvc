<?php 
	
class TestapiController 
{

	public function actionIndex()
	{
		$className = __CLASS__;

		$methodName = __METHOD__;

		$array = ['class' => $className,'mathod'=>$methodName];

		//header('Content-Type: application/json');

		echo json_encode($array);
		print_r($_SERVER);
		

		return true;
	}

} 



?>