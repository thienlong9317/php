<?php
$rs = fopen("../data/user.txt","r");
while(!feof($rs))
{
    echo fgets($rs);
    echo "<br>";
}
fclose($rs);
?>