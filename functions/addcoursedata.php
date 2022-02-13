<?php
$course_name = $_POST['cname'];
$course_trainer = $_POST['c_trainer'];
$course_price = $_POST['cprice'];
$course_duration = $_POST['cduration'];
echo $course_trainer;

$db = mysqli_connect("localhost","root","","rediant") or die(mysqli_error());

$insert_query = "INSERT INTO course(c_name,c_price,c_trainer,c_duration) VALUES
('$course_name',$course_price,$course_trainer,$course_duration)";
mysqli_query($db,$insert_query) or die(mysqli_error());
header("Location: http://localhost/rediant/allcourse.php");
mysqli_close($db);
?>