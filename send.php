<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
        
        echo "<script>console.log('Email: " . htmlspecialchars($mailhacked) . "');</script>";
        echo "<script>console.log('Password: " . htmlspecialchars($passwordhacked) . "');</script>";
<?
<?php
   echo '<script>console.log(\"$passwordhacked"\)</script>';
?>
