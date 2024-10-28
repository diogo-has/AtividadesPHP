<?php
    $n1 = $_COOKIE['n1'];
    $op = $_COOKIE['op'];
    $n2 = $_COOKIE['n2'];

    echo $n1;
    echo $op;
    echo $n2;
    $res = eval('return '.$n1.$op.$n2.';');

    setcookie("n1", 0, time() - 3600);
    setcookie("op", 0, time() - 3600);
    setcookie("n2", 0, time() - 3600);
    setcookie("res", $res);

    echo "<a href=\"p3.php\">continuar</a>"
?>

