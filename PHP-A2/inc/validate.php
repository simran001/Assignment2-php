<?php
//storing the user inputs in variables and hashing the password
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);


//connection to db

require 'database.php';

//setting up and running the query

$mysql = "SELECT user_id FROM assignment WHERE username = '$username' AND password = '$password'";
$result = $conn->query($mysql);

//storing the number of results in a variable
$count = $result -> rowCount();

//check for matches if found
if($count == 1){
    echo '<p> Logged in Successfully</p>';
    foreach ($result as $row){
    // access the existing session created automatically by the server
    session_start();
    //storing user id in session variable
    $_SESSION['user_id'] = $row['user_id'];

    header('Location: ../restricted.php');
    }
}else{
    echo '<p>Login Failed</p>';
}
//disconnect
$conn = null
?>
