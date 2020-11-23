<?php
if ($_GET['action'] == 'set')
    setcookie($_GET['name'], $cookie_value, time() + 60 * 60 * 24);
else if ($_GET['action'] == 'get')
    echo ($_COOKIE[$_GET['name']]."\n");
else if ($_GET['action'] == 'del')
    setcookie($_GET['name'], '', 0);
?>