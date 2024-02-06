<?php

if (isset($_COOKIE["email"])) {
    echo "Welcome " . $_COOKIE["email"] . "!";
} else {
    echo "Cookie not set.";
}
?>
