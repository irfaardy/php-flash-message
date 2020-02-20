<?php 
/* Flash message
Author:Irfa Ardiansyah <irfaardiansyah95@gmail.com>
*/
namespace Irfa\Flashmsg;
use stdClass;
use Irfa\Flashmsg\ViewGenerator;

class FlashGenerator extends ViewGenerator {
	
	private static $params = [];

	protected static  function flashset($key,$msg,$type){
		$_SESSION['arr'] = $arr;
		$_SESSION[$key.'-type'] = $type;
		$_SESSION[$key] =  $msg;
			
		return true;

	}

	protected static  function flashget($session_name){
		$str = isset($_SESSION[$session_name])?$_SESSION[$session_name]:null;
		$type = isset($_SESSION[$session_name.'-type'])?$_SESSION[$session_name.'-type']:null;
		self::forget($session_name);
		if($str!=null){
			return self::viewMessage($str,$type);
		} else{
			return null;
		}


	}

	protected static function forget($str){
		unset($_SESSION[$str]);
		unset($_SESSION[$str.'-type']);
	}

	


}