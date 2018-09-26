<?php

$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=offers','admin','Ingrin_52');

 $rows=$db->exec('SELECT OfferID,OfferName, RedeemCode FROM offers ORDER BY OfferID DESC');

     foreach($rows as $row)
    
     echo "<div class='col-md-2'>
     <h3>Offer Name:</h3>",
    $row['OfferName'],  
    "<h3>RedeemCode:</h3>",
    $row['RedeemCode'],
    "<a class='btn btn-default' href='#' role='button'>View details &raquo;</a>",
     "</div>
    
     </div>"
?>
