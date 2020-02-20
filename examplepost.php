<?php 
	require_once 'Autoloader.php';
	use Irfa\Flashmsg\Flash;

	///SET FLASH MESSAGE
	/// Flash::set(key,message,type)
	Flash::set('msg' , 'Hello '.$_POST['name'],'success');
	header('location:'.$_SERVER['HTTP_REFERER']);