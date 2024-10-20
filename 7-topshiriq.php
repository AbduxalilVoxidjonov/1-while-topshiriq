<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shaxmat Doskasi</title>
    <style>
        .shaxmat-doska {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            width: 400px;
            height: 400px;
            border: 2px solid black;
        }
        .qora {
            background-color: black;
        }
        .oq {
            background-color: white;
        }
        .katak {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

<div class="shaxmat-doska">
    <?php
    $qator = 1; // Qator raqami
    while ($qator <= 8) {
        $ustun = 1; // Ustun raqami
        while ($ustun <= 8) {
            // Qator va ustun yig'indisi juft bo'lsa oq, toq bo'lsa qora
            if (($qator + $ustun) % 2 == 0) {
                echo "<div class='katak oq'></div>";
            } else {
                echo "<div class='katak qora'></div>";
            }
            $ustun++;
        }
        $qator++;
    }
    ?>
</div>

</body>
</html>
