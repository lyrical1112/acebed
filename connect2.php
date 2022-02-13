<?php
    session_start();
    
    $conn = mysqli_connect("localhost" , "sonatine1" , "example0013!" ,"sonatine1" ) ; //db연결
    // $conn = mysqli_connect("localhost" , "root" , "123456" , "acebed" ) ;
    //mysql_select_db("acebed","$mysqli");
    $join = "SELECT * from acebed_join"; // table 연결

?>