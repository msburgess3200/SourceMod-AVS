<?php
// settings for Adz panel
// database information
$data['cfg']['host'] = "localhost";
$data['cfg']['username'] = "";
$data['cfg']['password'] = "";
$data['cfg']['database'] = "";

// enable panel?
$data['cfg']['enable'] = 1; // ONLY 1 OR 0 GOES IN HERE.. .. 1=ENABLED .. 0=DISABLED
$data['cfg']['update'] = 1; // check for updates

// enable test mode.. CAUTION THIS DISABLES DATABASE CONNECTION
$data['cfg']['test'] = 1;

// do NOT edit or I will find you and kill you.
$data['cfg']['version'] = 1.0;
//
// Not but seriously if you cock this up below, it's your own bed that you're gonna have to lay in.
//
$conn = new mysqli($data['cfg']['host'], $data['cfg']['username'], $data['cfg']['password'], $data['cfg']['database']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
}
?>