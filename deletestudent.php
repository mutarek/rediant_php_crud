<?php 
$student_id = $_GET['studentid'];

$db = mysqli_connect("localhost","root","","rediant") or die(mysqli_error());

$delete_query = "DELETE FROM student WHERE s_id = $student_id";

mysqli_query($db,$delete_query) or die(mysqli_error());

header("Location: http://localhost/rediant/home.php");

mysqli_close($db);


?>