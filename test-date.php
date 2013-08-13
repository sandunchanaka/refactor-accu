<?php

/*date("Y-m-d"); 
echo date("l");
echo "<br>";
echo date("F");
echo "<br>";
echo date("Y");*/

$getdate = strtotime("2008-12-15");
echo date("l F d, Y", $getdate);

?>