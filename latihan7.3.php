<?php

class Shape {
    const PI = 3.142;

    function __call($name, $arg) {
        if ($name == 'area') {
            switch (count($arg)) {
                case 0:
                    return 0; // Tidak ada argumen
                case 1:
                    return self::PI * $arg[0]; // Area lingkaran
                case 2:
                    return $arg[0] * $arg[1];   // Area persegi panjang
                default:
                    throw new Exception("Invalid number of arguments");
            }
        } else {
            throw new Exception("Method $name does not exist");
        }
    }
}

$circle = new Shape();
echo "Area Lingkaran: " . $circle->area(3) . "<br/>";

$rect = new Shape();
echo "Area Persegi Panjang: " . $rect->area(8, 6) . "<br/>";

?>
