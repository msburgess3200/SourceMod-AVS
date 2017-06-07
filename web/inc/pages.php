<?php
switch ($action) {
  case "login":
    include("./inc/pages/login.php");
    break;
  case "logout":
    include("./inc/pages/logout.php");
    break;
  case "home":
  if (isset($_COOKIE['loggedin'])){
    include("./inc/pages/home.php");
    exit;
    }
    break;
  case "add":
  if (isset($_COOKIE['loggedin'])){
    include("./inc/pages/add.php");
    exit;
    }
    break;
  case "adz":
  if (isset($_COOKIE['loggedin'])){
    include("./inc/pages/adz.php");
    exit;
    }
    break;
  case "servers":
  if (isset($_COOKIE['loggedin'])){
    include("./inc/pages/servers.php");
    exit;
    }
    break;
  case "conf":
  if (isset($_COOKIE['loggedin'])){
    include("./inc/pages/conf.php");
    exit;
    }
    break;
  case "post":
  if (isset($_COOKIE['loggedin'])){
    include("./inc/pages/post.php");
    exit;
    }
    break;
  default:
}
?>