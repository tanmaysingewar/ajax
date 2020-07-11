<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","socialsite") or die("Connection Failed");

$sql = "DELETE FROM students WHERE id = {$student_id}";
?>