<?php
function raqamniSozga($n) {
    // Har bir raqam uchun so'zlar massivi
    $raqamlarSozda = [
        0 => 'nol',
        1 => 'bir',
        2 => 'ikki',
        3 => 'uch',
        4 => 'to\'rt',
        5 => 'besh',
        6 => 'olti',
        7 => 'yetti',
        8 => 'sakkiz',
        9 => 'to\'qqiz'
    ];

    // Sonni stringga aylantirib, har bir raqamini so'zlarda chiqamiz
    $raqamlar = str_split($n);
    $natija = [];

    foreach ($raqamlar as $raqam) {
        $natija[] = $raqamlarSozda[$raqam]; // Raqamga mos so'zni qo'shamiz
    }

    // So'zlarni bo'sh joy bilan birlashtiramiz
    return implode(' ', $natija);
}

// Misol
$N = 2345;
$natija = raqamniSozga($N);

echo "Raqamlar so'zlarda: " . $natija; // Natija: ikki uch to'rt besh
?>
