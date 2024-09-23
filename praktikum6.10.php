<?php
class Perulangan {
    
    public function loop1() {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 5; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= (2 * $i); $j++) {
                echo "* ";
            }
         
            echo "<br />";
        
        }
    }
    public function loop2(){
        for ($i = 1; $i <= $t=6; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $t=6 - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    public function loop3(){
        for ($i = 1; $i <= $t=6; $i++) {
            for ($j = $t=6; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $t=6 - 1; $i >= 1; $i--) {
            for ($j = $t=6; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}

$ObjekPerulangan = new Perulangan ();
echo "Jenis Perulangan 1 "."<br />";
echo $ObjekPerulangan->loop1()."<br />";
echo "Jenis Perulangan 2 "."<br />";
echo $ObjekPerulangan->loop2()."<br />";
echo "Jenis Perulangan 3 "."<br />";
echo $ObjekPerulangan->loop3()."<br />";