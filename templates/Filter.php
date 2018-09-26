<?php 

$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=towndb','admin','Ingrin_52');

 $rows=$db->exec('SELECT TownID,TownName,TownBio, Catergory, OfferID FROM towns ORDER BY TownID DESC');

 foreach($rows as $row)
    
 echo
'<h2>Filters</h2>
        <h3>Offer Catergory</h3>
        <div class="list-group">
           <a href="#" class="list-group-item">', $row['Catergory'],'</a>
        </div>
?>