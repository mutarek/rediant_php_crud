<?php 
$trainer_id = $_POST['tid'];
$trainer_name= $_POST['tname'];
$trainer_number= $_POST['tnumber'];
$trainer_dob= $_POST['tdob'];
$trainer_address= $_POST['taddress'];

$db = mysqli_connect("localhost","root","","rediant") or die(mysqli_error());
$update_query= "UPDATE trainer SET t_name ='$trainer_name', t_number = $trainer_number, t_dob = '$trainer_dob', t_address = '$trainer_address' WHERE t_id =$trainer_id ";
mysqli_query($db,$update_query) or die(mysqli_error());

header("Location: http://localhost/rediant/alltrainer.php");
mysqli_close($db);

?>