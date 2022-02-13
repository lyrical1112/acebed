<?php
    session_start();

    $conn = mysqli_connect("localhost" , "sonatine1" , "example0013!" ,"sonatine1" ) ; //db연결
    // $conn = mysqli_connect("localhost" , "root" , "123456" ,"acebed" ) ;
    //mysql_select_db("acebed","$mysqli");
    $board = "SELECT * from acebed_board"; // table 연결

?>