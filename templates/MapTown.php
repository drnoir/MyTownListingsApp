<?php
        $view=new View;
        echo $view->render('html/jumbotron.html');
        echo $view->render('templates/TownDropdown.php');
        echo $view->render('templates/Filter.php');
        echo $view->render('templates/MapView.php');
   
?>