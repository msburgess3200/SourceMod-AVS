<?php
if (isset($_GET['act'])) {
	$act = $_GET['act'];
} else {
	$act = "";
}

if ($act == "post_login") {
	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);
	$remember = $conn->real_escape_string($_POST['remember_me']);
	$password_md5 = md5($password);

	// check for account credentials
	$result = $conn->query('SELECT * FROM `users` WHERE `username` = "'. $username . '" AND `password` = "'. $password_md5 .'";');
	$num_rows = $result->num_rows;

	if ($num_rows == 0) {
		header("Location: ./?err=1");
	} else {
		// account enabled
		$result = $conn->query('SELECT * FROM `users` WHERE `username` = "'.$username.'" AND `password` = "'.$password_md5.'" AND `enable` = 1;');
		$num_rows = $result->num_rows;
		if ($num_rows == 1) {
			if ($remember == "remember_me") {
				setcookie("loggedin",1,strtotime('+30 days'));
				setcookie("username",$username,strtotime('+30 days'));
			} else {
				setcookie("loggedin",1);
				setcookie("username",$username);
			}
			header("Location: ../?action=home");
		} else {
			header("Location: ./?err=3");
		}
	}
} else { ?>
<form method="POST" action="?action=login&act=post_login" class="form-horizontal">
	<div class="form-group">
      <div class="col-md-6">
      	<label class="control-label">Username</label>
        <input type="text" class="form-control" name="username" value="" placeholder="Username"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-6">
      	<label class="control-label">Password</label>
        <input type="password" class="form-control" name="password" value="" placeholder="Password"/>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="rememberme"> Remember Me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      	<button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>
<?php } ?>