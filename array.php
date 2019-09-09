<?php

#Array-Variable that can holds multiple values
/*
-Indexed
-Associative
-Multi-dimensional array

*/

$people= array('festus', 'foluwa','toba' );
$peo= array(1, 2,3);
echo $people[1];
echo $peo[2];
$cars=['honda'];
echo $cars[0];
//echo count($cars);
//print_r($cars);
//var_dump($cars);
 # -Associative

$peopl =array('fessy'=>79, 'ope'=>76 , 'blessing'=>78);

echo $peopl['fessy'];

$people =array(79=>'fessy', 76=>'ope' , 78=>'blessing');
echo $people[79];
$people['bolu']=78;
print_r($people);



?>