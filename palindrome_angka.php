<?php

function palindrome_angka($angka) {
  $statpal=0;
  $revangka = "";
  while($statpal==0){
    $angka+=1;
    $revangka = strrev(strval($angka));
    if($revangka==strval($angka)){
        $statpal=1;
    }
  }
  return $angka;
}

// TEST CASES
echo palindrome_angka(8)."<br>"; // 9
echo palindrome_angka(10)."<br>"; // 11
echo palindrome_angka(117)."<br>"; // 121
echo palindrome_angka(175)."<br>"; // 181
echo palindrome_angka(1000)."<br>"; // 1001

?>