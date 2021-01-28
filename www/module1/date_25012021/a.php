<?php
$a = 123;
function abc($a)
{
    //echo $GLOBALS['a'];
    echo $a;
}
abc($a);