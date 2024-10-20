<form name= "factorial" method="post">
    Raqam kiriting: <input type="number" name = "fact" placeholder="Number" >
    <input type  = "submit">

</form>

<?php
 $nums = $_POST["fact"];
 $sum=1;
do{
    if($nums==1 || $nums == 0){
        echo  1;
        return;
    }else{
        $sum*=$nums;
        $nums--;
    }
}while($nums>=2);
echo $sum;


?>