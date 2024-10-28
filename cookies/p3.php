<?php
    echo 'resultado: '.$_COOKIE['res'];
    setcookie('res', 0, time() - 3600);
?>