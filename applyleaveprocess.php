<?php
/**
 * @Author: Your name
 * @Date:   2023-01-16 13:12:02
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-01-27 15:54:00
 */

//including the database connection file
require_once ('dbh.php');

//getting id of the data from url
$id = $_GET['id'];
//echo $id;
$reason = $_POST['reason'];

$start = $_POST['start'];
//echo "$reason";
$end = $_POST['end'];

$sql = "INSERT INTO `employee_leave`(`id`,`token`, `start`, `end`, `reason`, `status`) VALUES ('$id','','$start','$end','$reason','Pending')";

$result = mysqli_query($conn, $sql);

//redirecting to the display page (index.php in our case)
header("Location:..//eloginwel.php?id=$id");
?>

