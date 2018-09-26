<?php


$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=towndb','admin','Ingrin_52');

 $rows=$db->exec('SELECT TownID,TownName,TownBio,OfferID FROM towns ORDER BY TownID DESC');

 foreach($rows as $row)
    
 echo

'<div class="col-md-4">
<p>Town Name:</p>
      <div class="btn-group">
        <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">',
        $row['TownName'],'<span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
        <li>', $row['TownName'],'</li></ul>
        </div>';
?>