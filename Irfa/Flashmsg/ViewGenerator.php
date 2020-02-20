<?php 
/* Flash message
Author:Irfa Ardiansyah <irfaardiansyah95@gmail.com>
*/
namespace Irfa\Flashmsg;
use stdClass;

class ViewGenerator {

	protected static function viewMessage($str,$type){
		return self::loadView(['message' => $str,'class' => self::cssClass($type)]);
	}

	private static function cssClass($type){
		include('config.php');
		return $config[$type];
	}
	private static function loadView($var){
 		if($var != null){
	 		foreach($var as $key => $val){

	 			${$key} = $val;

	 		}
	 	}
	 	include('config.php');
	 	$file=$config['view'];
		 	if(file_exists($file)){
		 		
			include($file);
	 		} else{//Jika File tidak ditemukan
	 			echo "<b>Error: File ".$file." not found. Please check configuration</b>";
	 		}
 	}	

	


}
