<?php

$conn = mysqli_connect("localhost", "root", "", "cs4014");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

