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
		echo $view->render('templates/MapTown.php'); 
		echo $view->render('templates/OfferView.php');

    }
);
$f3->run();
?>