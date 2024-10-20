<?php
function birinchiVaOxirgiYigindisi($n) {
    // Oxirgi raqamni topish
    $oxirgiRaqam = $n % 10;

    // Birinchi raqamni topish
    while ($n >= 10) {
        $n = (int)($n / 10);
    }
    $birinchiRaqam = $n;

    // Birinchi va oxirgi raqamlarning yig'indisi
    return $birinchiRaqam + $oxirgiRaqam;
}

// Misol
$N = 12345;
$natija = birinchiVaOxirgiYigindisi($N);

echo "Birinchi va oxirgi raqamlar yig'indisi: " . $natija; // Natija: 6
?>
