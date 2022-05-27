<?php
$x = $_POST["one"];
$z = $_POST["two"];

if(is_numeric($x) && is_numeric($z) ){
    if(isset($_POST['add'])){
        echo "Your Result is : " , $x + $z ;
    }else if(isset($_POST['substract'])){
        echo "Your Result is : " , $x - $z ;
    }
    else if(isset($_POST['sum'])){
        echo "Your Result is : " , $x * $z ;
    }
    else if(isset($_POST['divided'])){
        echo "Your Result is : " , $x / $z ;
    }else{
        echo "enter a nmbr";
    }
    
}else{
    echo "Your Code is Invalid Sir,Please Read First Our Need Then Submit" ;
}


?>