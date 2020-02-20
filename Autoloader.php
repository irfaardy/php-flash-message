<?php 
if(!isset($_SESSION)){
    session_start();
}
class Autoloader {
    static public function loader($className) {
        $filename =  str_replace("\\", '/', $className) . ".php";
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        }
        return FALSE;
    }
}
spl_autoload_register('Autoloader::loader');