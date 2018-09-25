<?php
$f3=require('lib/base.php');
// $f3=require('con.php');

 $db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=offers','admin','Ingrin_52');


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
		// echo Template::instance()->render('html/offersView.html');

		$rows=$db->exec('SELECT OfferID,OfferName FROM offers ORDER BY id DESC');
			echo count($rows); // outputs 4
			foreach($rows as $row)
			echo $row['OfferName'];
			// outputs 'Averell,Jack,William,Joe,'
		//TEST -  QUERY TO REFINE - Select all where Town ID = 
    }
);
$f3->run();
?>