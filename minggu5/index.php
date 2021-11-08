<?php
function operator(){
    $a = 10;
    $b = 5;
    
    echo "Bilangan 1 : " . $a . "<br> Bilangan 2 : " . $b;
    
    echo "<br><br>berikut merupakan hasil dari setiap operasi ";
    
    echo "<br><br>PENJUMLAHAN <br> Operator : + <br> Hasil : ".($a+$b);
    echo "<br><br>PENGURANGAN <br> Operator : - <br> Hasil : ".($a-$b);
    echo "<br><br>PERKALIAN <br> Operator : * <br> Hasil : ".($a*$b);
    echo "<br><br>PEMBAGIAN <br> Operator : / <br> Hasil : ".($a/$b);
    echo "<br><br>MODULUS <br> Operator : % <br> Hasil : ".($a%$b);
}


function aray_random(){
    echo "<h2> RANDOM ARRAY</h2>";

    $arr = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "tomas", "jojo", "anton");
    shuffle($arr);
    
    foreach ($arr as $data){
        echo "$data<br>";
    }
}



function prima(){
    echo " <h2>BILANGAN PRIMA</h2>";
    for($i = 2; $i <=50; $i++){
        for($j = 2; $j<$i ;$j++){

            if($i % $j == 0){
                break;

            }
            else if ($i-1 == $j){
                echo "$i ";
                break;
            }
        }
    }
}
operator();
aray_random();
prima();
?>