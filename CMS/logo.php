<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/addstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Logo</title>
</head>
<body>
<?php
    include "db_conn.php";
    include "navigation.php";
?>

<?php
$query = "
SELECT * FROM logo
";
 $result = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($result)){ 
?>
<div class="container mt-5">
    <main class="col-md-9 col-lg-12 px-md-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Logo</h1>
	</div>
		<form method="post" action="savelogo.php">
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Tekst</span>
            <input value="<?php echo $row["logotext"];?>" name="logotext" id="logotext" class="form-control" >
        </div>
        <div class="input-group mb-4 logocolordiv">
            <span class="input-group-text tresc" id="basic-addon1">Kolor</span>
            <input type="color" value="<?php echo $row["logocolor"];?>" name="logocolor" id="color-picker-1" class="form-control logocolor" >
        </div>
        <input class="btn mb-5" type="submit" value="Zapisz">
        <a class="btn mb-5" name="exit" id="exit" href="admin.php" role="button">Wyjdz</a>
	</form>
    <?php }?>
</main>


</body>
</html>