<?php
//start session
session_start();
// build connections
$conn = mysqli_connect("localhost", "root", "", "web_project");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}