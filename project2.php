<?php
session_start();

if(isset($_SESSION['errors']) && !empty($_SESSION['errors']))  {
    foreach($_SESSION['erroes']  as $error){
        echo "<p style='color:red;'>{$error}</p>";
    }
} elseif(isset($_SESSION['succes'])) {
    echo "<p style='color:green;'>{$_SESSION['success']}</p>";
}
