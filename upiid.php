<?php
    require('connection.inc.php');
    // echo '<pre>';
    // print_r($_POST);
    $name=strtolower($_POST['name']);

    $sql=mysqli_query($con,"select customer_id from users where name='$name'");
    $num=mysqli_num_rows($sql);
    if($num>0){
        $row=mysqli_fetch_assoc($sql);
        echo $row['customer_id'];
    }else{
        echo 0;
    }
?>