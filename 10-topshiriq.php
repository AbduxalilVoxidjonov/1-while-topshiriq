<?php
function raqamlarYigindisi($n) {
    $yigindi = 0;
    while ($n != 0) {
        // Sonning oxirgi raqamini qo'shamiz va undan keyin oxirgi raqamni olib tashlaymiz
        $yigindi += $n % 10;
        $n = (int)($n / 10);
    }
    return $yigindi;
}

// Misol
$N = 12345;
$natija = raqamlarYigindisi($N);

echo "Raqamlar yig'indisi: " . $natija; // Natija: 
