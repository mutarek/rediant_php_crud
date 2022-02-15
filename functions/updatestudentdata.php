<?php 
$student_id = $_POST['sid'];
$student_name = $_POST['sname'];
$student_number = $_POST['snumber'];
$student_course = $_POST['s_course'];

$db = mysqli_connect("localhost","root","","rediant") or die(mysqli_error());
$fetch_query = "SELECT * FROM course WHERE c_id = $student_course ";
$courseresult = mysqli_query($db,$fetch_query) or die(mysqli_error());
$course = mysqli_fetch_assoc($courseresult);

$student_trainer = $course['c_trainer'];

$update_query = "UPDATE student SET s_name ='$student_name', s_number = $student_number, s_course= $student_course, s_trainer = $student_trainer WHERE s_id = $student_id ";

mysqli_query($db,$update_query) or die(mysqli_error());

header("Location: http://localhost/rediant/home.php");

mysqli_close($db);

?>