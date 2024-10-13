<?php
define('TOTAL','400');
$math=86;
$eng=58;
$kis=49;
$bio=90;
$total= $math+ $eng + $kis +$bio;
$percentage = ($total*100)/TOTAL;
echo "Your percentage is ".$percentage;
?>