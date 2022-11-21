<?php 

// connect to database
$conn =  mysqli_connect('localhost', 'root', 'phantom110590', 'pizza_town');

// check connection
if( !$conn ) {
    echo 'Connection  error : ' . mysqli_connect_error();
}


?>