
<?php
$conn = mysqli_connect("localhost", "root", "", "online_exam");

if (!$conn) {
    die("DB connection failed: " . mysqli_connect_error());
}
?>