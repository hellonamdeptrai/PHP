<?php
    $n = 2;
    $gt = 1;
    $tong = 0;
    for ($i = 1; $i <= $n; $i++){
        $gt *= $i;
        $tong += 1/$gt;
    }
    echo "Tổng là: " . $tong;
?>