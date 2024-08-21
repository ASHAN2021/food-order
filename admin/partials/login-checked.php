<?php
    if(!isset($_SESSION['user'])){
        $_SESSION['no-login msg'] = "<div class='error'>Please login in to Access the Admin Panel</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
?>