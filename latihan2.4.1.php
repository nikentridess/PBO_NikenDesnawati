<?php
$x = 5;
$y = 10;
function myTest()
{
    $GLOBALS['Y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y;
?>