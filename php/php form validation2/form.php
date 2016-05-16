<center>
<?php
$check = implode(",", $_POST['Intrest']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "from";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$first_name =$_POST['firstname'];
$nationality = $_POST['nationality'];
$gender = $_POST['gender'];
$sql = "INSERT INTO form (First_name, Nationality, gender, Interst )
VALUES ('$first_name', '$nationality', '$gender', '$check' )";

if(mysqli_query($conn, $sql)){
echo "Records added successfully.";
} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$sql_2 = "SELECT  * FROM form ";
$result = mysqli_query($conn, $sql_2);
if (mysqli_num_rows( $result) > 0) {
     while($row = mysqli_fetch_array($result)) {
 echo "<br> id: ". $row['id']. "  Name-: ". $row['First_Name']. " nationality -: " . $row['Nationality'] ." gender -: " .$row['gender'] ." inrest -:". $row[
         'Interst']. "<br>";
echo '<br><input type="submit" name="deleteform.php?u_id" class="btn btn" value="Delete File"/>';
              }
          } 

mysqli_close($conn);
?> </center>