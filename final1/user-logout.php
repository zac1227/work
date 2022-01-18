<?php
    session_start();
    
            unset($_SESSION["ac_name_nor"]);
            unset($_SESSION["ac_level"] );
            unset($_SESSION["ac_nor"] );
            header("Location:user-login.php");

?>