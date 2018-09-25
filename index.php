<?php 
 $f3=require('lib/base.php');
 $db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=offers','admin','Ingrin_52');

 $rows=$db->exec('SELECT OfferID,OfferName FROM offers ORDER BY OfferID DESC');
     echo "<h3>Total Rows:</h3>",count($rows); // outputs 4
     foreach($rows as $row)
     
     echo "<h3>Offer Name:</h3>", $row['OfferName'],
     echo "<h3>Offer Name:</h3>", $row['OfferName'],

     // outputs 'Averell,Jack,William,Joe,'
    
 ?>