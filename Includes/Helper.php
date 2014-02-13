<?php


/**
* 
*/
class Helper 
{
	function __construct()
	{
	}

	public function link($data){
		$controller =  strtolower($data['controller']);
		$action = (isset($data['action']) ? $data['action'] : 'index');
		$text  = (isset($data['text']) ? $data['text'] : '');
		$class = (isset($data['class']) ? "class =".$data['class'] : '');
		$id = (isset($data['id']) ? "id =".$data['id'] : '');

		$path = URL."$controller/$action";

		if(isset($data['arguments']) && !empty($data['arguments'])){
			foreach ($data['arguments'] as $argument) {
				$path .="/$argument";
			}
		}

		return "<a $class $id href=".$path.">".$text."</a>";

	}


}

?>