<?php
//TEST -  QUERY TO REFINE - Select all where Town ID = 
$f3->set('result',$db->exec('SELECT * FROM offers'));
echo Template::instance()->render('offersView.html');

?>