<?php 

// connect to database
$conn =  mysqli_connect('localhost', 'root', '', 'pizza_town');

// check connection
if( !$conn ) {
    echo 'Connection  error : ' . mysqli_connect_error();
}


?>