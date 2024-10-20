<?php
$konfetNarxi = 10.50; // 1 kg konfetning narxi (haqiqiy son)

$miqdor = 0.1;
while ($miqdor <= 1.0) {
    // Har bir miqdor uchun narxni hisoblaymiz
    $narx = $konfetNarxi * $miqdor;
    // Narxni ekranga chiqaramiz
    echo "$miqdor kg konfetning narxi: " . number_format($narx, 2) . " so'm<br>";
    // Miqdorni 0.1 ga oshiramiz
    $miqdor += 0.1;
}
?>
