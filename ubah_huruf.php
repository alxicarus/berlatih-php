<?php
function ubah_huruf($string){
    $panjang = strlen($string);
    $ubah = "";
    for ($i=0; $i <$panjang ; $i++) {
        $char = $string[$i];
        if($char!="Z" && $char != "z"){
            $char++;
        }else{
            if($char == "z"){
                $char = 'a';
            }else{
                $char = 'A';
            }
        }
        $ubah[$i]=$char;
    }
    return $ubah."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>