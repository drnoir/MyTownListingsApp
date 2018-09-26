<?php 

$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=offers','admin','Ingrin_52');

 $rows=$db->exec('SELECT OfferID,OfferName,Category FROM offers ORDER BY OfferID DESC');

 foreach($rows as $row)
 echo
'<a href="#" class="list-group-item">', $row['Category'],'</a>'
?>