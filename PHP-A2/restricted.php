<?php
require './inc/header.php';
// checking for authentication before we give access
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location:signin.php');
        exit();
    }else{
        // showing the suitable output
        require './inc/database.php';
        echo'<section class = "login-row">';
        echo '<div>';
        echo '<h2>Login Successful. Congratulations!</h2>';
        echo '</div>';
        echo '</section>';
        echo '<section class="disperson">';
        echo '<h2>Welcome To Our Team</h2>';
        echo '<p>A heartfelt welcome to our nail salon family! We are thrilled to have you join us. Your talent and creativity are valuable additions to our team. Here is to a fantastic journey together at our salon</p>';
        echo '<div class="success">';
        echo '<a class = "btn btn-warning" href = "logout.php">Logout</a>';
        echo '</div>';
        echo '</section>';
        
        // disconnect
        $conn = null;
    }
    require './inc/footer.php';
?>

