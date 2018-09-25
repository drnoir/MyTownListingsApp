<?php
$f3=require('lib/base.php');
$f3->route('GET /',
    function($f3) {
        $f3->set('name','world');
        $view=new View;
		echo $view->render('html/header.html');
		echo $view->render('html/menu.html');
		echo $view->render('html/MapTown.html');
		echo $view->render('html/offersView.html');
        // Previous two lines can be shortened to:
        // echo View::instance()->render('template.htm');
    }
);
$f3->run();
?>