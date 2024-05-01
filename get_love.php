<?php
    if (isset($_POST['pass']) && $_POST['pass'] == '9007') {
        $fileContent = file_get_contents("config/love.txt");
        echo $fileContent;
    } else {
        echo "获取失败";
    }
?>