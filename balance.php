<?php
    require('connection.inc.php');
 
    $name=strtolower($_POST['name']);

    $sql=mysqli_query($con,"select current_balance from users where name='$name'");
    $num=mysqli_num_rows($sql);
    if($num>0){
        $row=mysqli_fetch_assoc($sql);
        echo $row['current_balance'];
    }else{
        echo 0;
    }
   
?>