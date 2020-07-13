<?php

function Convert ($angka)
{
    $option = ['', 'satu ', 'dua ', 'tiga ', 'empat ', 'lima ','enam ', 'tujuh ', 'delapan ', 'sembilan ', 'sepuluh ', 'sebelas ', 'dua belas ', 'tiga belas ', 'empat belas ', 'lima belas ', 'enam belas ', 'tujuh belas ', 'delapan belas ','sembilan belas '];

    $puluhan = round($angka / 10);
    $satuan = $angka % 10;
    $terbilang = '';
    if($puluhan > 0 )
    {
        if($puluhan == 1)
        {
            $terbilang .= $option[$angka];
        }elseif($puluhan > 1)
        {
            $terbilang .= $option[$puluhan]."puluh";
            $terbilang .= $option[$satuan];
        }
    }
    elseif ($satuan != 0) 
    {
        $terbilang .= $option[$satuan];
    }
    
    return $terbilang;
}



$satu = Convert(1);
$belasan = Convert(12);
$puluhan = Convert(30);

echo $satu."\n";
echo $belasan."\n";
echo $puluhan."\n";

?>