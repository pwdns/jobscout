<?php

session_start();
session_unset();
session_write_close();
setcookie("username", $username, time() - 1, "/");
header("Location: index.html");
exit;
