<?php
session_start();
$mesg = "";
if(isset($_SESSION['error'])) {
  foreach ($_SESSION['error'] as $value) {
    $mesg .= $value."<br>";
  }
  unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Record Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>php validation form</h1>
<form action="form.php" method="post" enctype="multipart/form-data">
First name:<input type="text" name="firstname">
<?php if($mesg != ""){ echo "$mesg"; $mesg = ""; }?>
<br>
Nationality:<select name="nationality">
  <option> --Select-- </option>
  <option>India</option>
  <option>China</option>
  <option>Australia</option>
</select> 
<br>
  Gender:<input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>
 <br>
Interst:<input type="checkbox" id="cbox1" value="Designing" name="Intrest[]">Designing
<input type="checkbox" id="cbox2" value="Devlopment" name="Intrest[]">Devlopment
<input type="checkbox" id="cbox2" value="Hacking" name="Intrest[]"> Hacking
<br>
Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
 <br>
<input type="submit" value="Submit" name = "submit">
    </form>

    </body>

    </html>
