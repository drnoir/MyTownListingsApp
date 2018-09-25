<?php 
 $f3=require('lib/base.php');
 $db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=offers','admin','Ingrin_52');
 $db2=new \DB\SQL('mysql:host=localhost;port=3306;dbname=towndb','admin','Ingrin_52');

 $rows=$db->exec('SELECT OfferID,OfferName FROM offers ORDER BY OfferID DESC');
     echo "<h3>Total Rows:</h3>",count($rows); // outputs 4
     foreach($rows as $row)
    
     echo "<h3>Offer Name:</h3>", $row['OfferName'],
     
//test connection to town 
$rows2=$db2->exec('SELECT TownID,TownName,TownBio,OfferID FROM towns ORDER BY TownID DESC');
     echo "<h3>Total Rows:</h3>",count($rows2); // outputs 4
     foreach($rows2 as $row2)
     
     echo "<h3>Town Name:</h3>", $row2['TownName'], "<h3>Town Bio:</h3>", $row2['TownBio']
     
 ?>