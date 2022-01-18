<?php
    $id = $_GET['id'];
    include "dblink.php";
    $sql = "DELETE FROM `account` WHERE `account`.`id` = $id";
    $result = mysqli_query($link, $sql);
    echo "<script>alert('您已刪除此帳號!'); location.href = 'man_acc.php';</script>";
    // 您已刪除此筆最新消息!
    mysqli_close($link);
?>
