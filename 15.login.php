<?php
    if ($_POST["id"]=="jin" && $_POST["pwd"]=="123456")  <!-- 資料庫中的密碼 -->
        echo "login success";
    else
        echo "login fail";
?>