<?php

class TestParent
{
    public function f1()
    {
        echo 1;
    }

    public function f2()
    {
        echo 2;
    }
}

class TestChild
{
    public function f2($a)
    {
        echo $a;
    }
}

$a = new TestChild();
$a->f2('ankur'); // it will print 'ankur'

?>