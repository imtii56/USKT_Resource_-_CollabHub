<?php
//start session
session_start();
// build connections
$conn = mysqli_connect("sql107.infinityfree.com", "if0_42864112", "IMtoosheikh67", "if0_42864112_web_project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}