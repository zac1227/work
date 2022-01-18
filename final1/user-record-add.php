<?php
    if(isset($_POST["normalrecord"])){
        $rent_id=$_POST["rrent"];
        $room_id = $_POST["room_id"];
        $normal_date = $_POST["normal_date"];
        $room_avail_start = $_POST["room_avail_start"];
        $room_avail_end= $_POST["room_avail_end"];
        include "dblink.php";
        $sql = "INSERT INTO `normalrecord` (`room_id`,`normal_date`, `room_avail_start`, `room_avail_end`) VALUES ('$room_id','$normal_date','$aroom_avail_start', '$room_avail_end');";
        $result = mysqli_query($link, $sql);
       
        mysqli_close($link);
         header("Location: user-normalrecord.php");
        
        }
?>