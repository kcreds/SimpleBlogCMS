<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/addstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<?php
include "db_conn.php";
include "navigation.php";

$sql= "DELETE FROM pages WHERE id='$_GET[id]'";
if(mysqli_query($con, $sql)){
    echo ('<br>Usunięto pomyślnie<br>');
} else{
    echo "ERROR: $sql. " . mysqli_error($link);
}
?>