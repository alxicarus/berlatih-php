<?php
function skor_terbesar($arr){
    $arrbesar = array();
    $panjang = sizeof($arr);
    for($i=0;$i<$panjang;$i++){
        $kelas = $arr[$i]['kelas'];
        $arrbesar[$kelas]= array("nama"=>$arr[$i]['nama'],"kelas"=>$arr[$i]['kelas'],"nilai"=>$arr[$i]['nilai']);
    }

    for ($i=0; $i < $panjang ; $i++) {
        $kelas = $arr[$i]['kelas']; 
        if($arrbesar[$kelas]['nilai']<$arr[$i]['nilai']){
            $arrbesar[$kelas]= array("nama"=>$arr[$i]['nama'],"kelas"=>$arr[$i]['kelas'],"nilai"=>$arr[$i]['nilai']);
        }
    }
    echo "<pre>";
    print_r($arrbesar);
    echo "</pre>";

}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>