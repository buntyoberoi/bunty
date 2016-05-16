<?php

if (!empty($_POST['Intrest'])) {
	foreach ($_POST['Intrest'] as $selected) {
		echo $selected."<br>";
	}
}else echo "not working";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "from";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$first_name =$_POST['firstname'];
$last_name = $_POST['lastname'];
$class =  $_POST['class'];
$password = $_POST['password'];
$nationality = $_POST['nationality'];
$gender = $_POST['gender'];
$comment = $_POST['comment'];
/*$Interst = $_POST['Interst'];*/
$fileToUpload = $_FILES['fileToUpload']['name'];
$temp = $_FILES['fileToUpload']['tmp_name'];
move_uploaded_file($temp, "images/".$fileToUpload);
echo '<img src = "images/'.$fileToUpload.'"style="max-width: 500px; max-height :500px;"><br>';

if (isset($_POST)) {
	$error = array();
	if (isset($_POST['firstname'])) {
		if ($_POST['firstname'] == "") {
			$error['firstname'] = " please enter your first name";
		}
	}
	if (isset($_POST['lastname'])) {
		if ($_POST['lastname'] == "") {
			$error['lastname'] = " please enter your lastname";
		}
	}
			if (isset($_POST['password'])) {
		if ($_POST['password'] == "") {
			$error['password'] = " please enter your password";
		}
		
	}
}
if (count($error)) {
session_start();
$_SESSION['error'] = $error;
header('location: index.php');
}


//$conn->close();
$sql = "INSERT INTO form (First_name, id, Nationality, gender, Interst, image) VALUES ('$first_name', '$last_name', '$class', '', '$password', '$nationality', '$gender', '$comment', '$selected', '$fileToUpload' )";

if(mysqli_query($conn, $sql)){

    echo "Records added successfully."."First name is:".$first_name."last_Name is:".$last_name."class is" .$class."password" ."nationality".$nationality."gender". $gender."comment" .$comment;

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}
// close connection
mysqli_close($conn);
?> 