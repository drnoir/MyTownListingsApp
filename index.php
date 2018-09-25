<?php
$f3=require('lib/base.php');

$f3->route('GET /',
    function($f3) {
	

		F3::set('DB',
					array(
					'dsn'=>'mysql:host=localhost;port=3306;dbname=offers',
					'user'=>'admin',
					'Ingrin_52'
					)
				);
        $view=new View;
		echo $view->render('html/header.html');
		echo $view->render('html/menu.html');
		echo $view->render('html/MapTown.html'); 
		echo $view->render('templates/OfferView.php');

		// echo Template::instance()->render('templates/OfferView.php');

		//TEST -  QUERY TO REFINE - Select all where Town ID = 
    }
);
$f3->run();
?>