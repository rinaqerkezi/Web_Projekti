<?php

if (isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"] . "!";
} else {
    echo "Cookie not set.";
}
?>
