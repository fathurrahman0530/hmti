<?php

$username = "admin";
$password = "fathur";

header("location: ");

if ($username == "admin" && $password == "admin") {
    echo "username : " . $username;
    echo "<br>";
    echo "Akses anda diterima";
} else {
    echo "username : " . $username;
    echo "<br>";
    echo "Akses anda ditolak";
}