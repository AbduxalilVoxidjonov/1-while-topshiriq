<form name= "num" method="post">
    Raqam kiriting: <input type="number" name = "nums" placeholder="Number" >
    <input type  = "submit"><br>

    <br>
</form>

<?php
 $nums = $_POST["nums"];
 for($i = 1; $i<= 9; $i++ ){
    echo "\n"; 
    echo "$nums x $i = ".($i*$nums);
    
 }

?>