<?php 
    $server = "localhost";
    $dbUsername = "Thinh1";
    $dbPassword = "123456";
    $dbName = "web_phone";
    // Kết nối
    $dbconnect = mysqli_connect( $server , 
    $dbUsername , $dbPassword, $dbName);
    if($dbconnect){
        echo"";
    }
    else{
        echo"";
    }
    mysqli_select_db( $dbconnect,  $dbName);
    // return $dbconnect;
    // ehco"Your are cornected";
?>
