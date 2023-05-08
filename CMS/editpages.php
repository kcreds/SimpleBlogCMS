<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="css/adminstyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/navstyle.css">

<?php
include "db_conn.php";
include "navigation.php";
?>
<div class="container"><div class="row">
<?php
$output = '';

$query = "
  SELECT * FROM pages ORDER BY id
 ";

$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="tbl">
  <table class="table">
    <thead>
    <tr>
     <th>ID</th>
     <th>Nazwa</th>
     <th>Meta Description</th>
     <th>Akcje</th>
    <tr>
    </thead>
    <tbody>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["menuname"].'</td>
    <td>'.$row["metadesc"].'</td>
    <td><a href=editpage.php?id='.$row["id"].'><i class="material-icons" style="color:#00AF3F;">settings</i></a>
    <a OnClick="return confirm(Czy napewno chcesz usunąć?);" href=deletepage.php?id='.$row["id"].'><i class="material-icons" style="color:#00AF3F;">delete</i></a></td>
   </tr>
   ';
 }
 echo $output;
}
else
{
 echo 'Nie znaleziono stron';
}
echo'</tbody></table>';

?></div></div>