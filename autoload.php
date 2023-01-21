<?php 

session_start();

require_once './bootstrap.php';

spl_autoload_register('autoload');

function autoload($class_name){
	$array_paths = array(
		'database/',
		'models/',
		'controllers/'
	);

	$parts = explode('\\',$class_name);
	// var_dump($parts);


	$name = array_pop($parts);

	foreach($array_paths as $path){
		$file = sprintf($path.'%s.php',$name);
		if(is_file($file)){
			include_once $file;
		}
	}

}
