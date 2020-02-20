<?php 
/* Flash message
Author:Irfa Ardiansyah <irfaardiansyah95@gmail.com>
*/
namespace Irfa\Flashmsg;


use stdClass;
use Irfa\Flashmsg\FlashGenerator;

class Flash extends FlashGenerator{

	function __construct(){
		
	}
	public static function set($key,$msg,$type='success'){
		self::flashset($key,$msg,$type);
		return true;

	}
	public static function get($session_name){
		$ret = self::flashget($session_name);
		return $ret;

	}

	
}