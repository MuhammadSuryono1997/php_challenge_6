<?php
function Write($angka, $kelipatan="")
{
    $option = ['', 'satu ', 'dua ', 'tiga ', 'empat ', 'lima ','enam ', 'tujuh ', 'delapan ', 'sembilan ', 'sepuluh ', 'sebelas ', 'dua belas ', 'tiga belas ', 'empat belas ', 'lima belas ', 'enam belas ', 'tujuh belas ', 'delapan belas ','sembilan belas '];
    return $option[$angka].$kelipatan;
}

function Convert ($angka)
{
    
    $puluhan = round($angka / 10);
    $satuan = $angka % 10;
    $terbilang = '';
    if($puluhan > 0 )
    {
        if($puluhan == 1)
        {
            $terbilang .= Write($angka);
        }elseif($puluhan > 1)
        {
            $terbilang .= Write($puluhan,"puluh");
            $terbilang .= Write($satuan);
        }
    }
    elseif ($satuan != 0) 
    {
        $terbilang .= Write($satuan);
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