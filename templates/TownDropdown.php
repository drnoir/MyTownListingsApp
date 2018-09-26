<?php
$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=towndb','admin','Ingrin_52');

 $rows=$db->exec('SELECT TownID,TownName,TownBio,OfferID FROM towns ORDER BY TownID DESC');
echo 
'<div class="col-md-4">
    <p>Town Name:', $row['TownName'],'</p>',
      '<div class="btn-group">
        <ul class="dropdown-menu">';
 
        foreach($rows as $row) 
        echo '<li>', $row['TownName'],'</li>',
        '</ul>
    </div>
</div>';
?>