<?php 
$trainer_id = $_GET['t_id'];

$db = mysqli_connect("localhost","root","","rediant") or die(mysqli_error());
$delete_query = "DELETE FROM trainer WHERE t_id = $trainer_id";

mysqli_query($db,$delete_query) or die(mysqli_error());

header("Location: http://localhost/rediant/alltrainer.php");

mysqli_close($db);
?>