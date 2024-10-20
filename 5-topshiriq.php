<form name= "num" method="post">
    Raqam kiriting: <input type="text" name = "nums" placeholder="Number" >
    <input type  = "submit"><br>

    <br>
</form>

<?php
function ajratSonlar($matn) {
    $faqatSonlar = preg_replace('/[^0-9]/', '', $matn);
    return $faqatSonlar;
}

$matn = $_POST["nums"];
$natija = ajratSonlar($matn);

echo $natija; 
?>
