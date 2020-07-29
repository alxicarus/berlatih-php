<?php
function pasangan_terbesar($angka){
    $terbesar = 0;
    $strangka = strval($angka);
    $current = 0;
    $panjang = strlen($strangka);
    for ($i=0; $i <$panjang-1 ; $i++) { 
        $temp = "";
        $temp= $strangka[$i];
        $temp[1]= $strangka[$i+1];
        $current = intval($temp);
        if($terbesar<$current){
            $terbesar=$current;
        }
    }
    return $terbesar;
}

// TEST CASES
echo pasangan_terbesar(641573)."<br>"; // 73
echo pasangan_terbesar(12783456)."<br>"; // 83
echo pasangan_terbesar(910233)."<br>"; // 91
echo pasangan_terbesar(71856421)."<br>"; // 85
echo pasangan_terbesar(79918293)."<br>"; // 99

?>