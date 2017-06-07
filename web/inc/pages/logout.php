<?php
setcookie("loggedin", "", strtotime('-30 days'));
setcookie("username", "", strtotime('-30 days'));
header("Location: ../?err=5");
?>