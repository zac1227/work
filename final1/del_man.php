<?php
    $id = $_GET['id'];
    include "dblink.php";
    $sql = "DELETE FROM `teacher` WHERE `teacher`.`id` = $id";
    $result = mysqli_query($link, $sql);
    echo "<script>alert('您已刪除此帳號!'); location.href = 'manedit.php';</script>";
    // 您已刪除此筆最新消息!
    mysqli_close($link);
?>
