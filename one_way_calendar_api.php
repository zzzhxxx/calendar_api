<?php
    $a = date("Y/md");
    $txt = "http://img.owspace.com/Public/uploads/Download/$a.jpg";
    header('Content-type: image/jpeg');
    echo file_get_contents($txt);
?>
