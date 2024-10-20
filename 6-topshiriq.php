<?php
function bolishAmalilarsiz($M, $N) {
    $butunQism = 0;
    $qoldiq = $M;

    while ($qoldiq >= $N) {
        $qoldiq -= $N;
        $butunQism++;
    }

    return ["butunQism" => $butunQism, "qoldiq" => $qoldiq];
}

$M = 17;
$N = 5;
$natija = bolishAmalilarsiz($M, $N);

echo "Butun qism: " . $natija["butunQism"] . "\n"; // 3
echo "Qoldiq: " . $natija["qoldiq"]; // 2
?>
