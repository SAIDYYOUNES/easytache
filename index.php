<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';
require_once './views/includes/header.php';


$home = new HomeController();

$pages = ['home','update','delete','logout','signup','login','taches','search'];

// $cc = "ggggggggg{$pages[0]}jhhjjkhk";
// var_dump($cc);
// die();


	if(isset($_GET['page'])){
		
		if(in_array($_GET['page'],$pages)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('views/includes/404.php');
		}

	}else{
		$home->index('home');
	}

	
		require_once './views/includes/footer.php';

	


