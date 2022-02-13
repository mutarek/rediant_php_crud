<?php
$stu_name = $_POST['sname'];
$stu_number = $_POST['snumber'];
$stu_course = $_POST['s_course'];

$db = mysqli_connect("localhost","root","","rediant") or die(mysqli_error());

$fetch_query = "SELECT * FROM course WHERE c_id =$stu_course";
$result = mysqli_query($db,$fetch_query) or die(mysqli_error());
$eachdata = mysqli_fetch_assoc($result);
$stu_trainer = $eachdata['c_trainer'];

$insert_query = "INSERT INTO student(s_name,s_number,s_course,s_trainer) VALUES 
('$stu_name',$stu_number,$stu_course,$stu_trainer)";
mysqli_query($db,$insert_query) or die(mysqli_error());
header("Location: http://localhost/rediant/home.php");
mysqli_close($db);


?>