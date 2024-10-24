<?php
function segitigaTerbalik($tinggi) {
    for ($i = $tinggi; $i >= 1; $i--) {
        // Cetak spasi
        for ($j = $tinggi - $i; $j > 0; $j--) {
            echo " ";
        }

        // Cetak bintang
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}


$tinggi = 5; 
segitigaTerbalik($tinggi);
?>
