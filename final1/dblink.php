<?php
    $link= mysqli_connect("localhost","root","12345678", "web_final1");
            if(!$link){
                echo "connect failed!", mysqli_connect_error();
            }
            mysqli_query($link, "set names utf8");
?>