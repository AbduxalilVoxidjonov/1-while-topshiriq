<?php
function sonniTeskari($n) {
    $teskari = 0;
    while ($n != 0) {
        // Oxirgi raqamni olish va teskari sonni qurishda foydalanish
        $teskari = ($teskari * 10) + ($n % 10);
        // Sonning oxirgi raqamini olib tashlaymiz
        $n = (int)($n / 10);
    }
    return $teskari;
}

// Misol
$N = 12345;
$natija = sonniTeskari($N);

echo "Sonning teskari ko'rinishi: " . $natija; // Natija: 54321
?>
