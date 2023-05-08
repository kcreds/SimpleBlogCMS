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
    <title>Stopka</title>
</head>
<body>
<?php
    include "db_conn.php";
    include "navigation.php";
?>

<?php
$query = "
SELECT * FROM footer
";
 $result = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($result)){ 
?>
<div class="container mt-5">
    <main class="col-md-9 col-lg-12 px-md-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edytuj Stopkę</h1>
	</div>
		<form method="post" action="savefooter.php">
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Nazwa Firmy</span>
            <input value="<?php echo $row["name"];?>" name="name" id="name" class="form-control" >
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Ulica</span>
            <input value="<?php echo $row["street"];?>" name="street" id="street" class="form-control" >
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Kod Pocztowy</span>
            <input value="<?php echo $row["address"];?>" name="address" id="address" class="form-control" >
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Województwo</span>
            <input value="<?php echo $row["city"];?>" name="city" id="city" class="form-control" >
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">NIP</span>
            <input value="<?php echo $row["nip"];?>" name="nip" id="nip" class="form-control" >
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Numer Telefonu</span>
            <input value="<?php echo $row["phone"];?>" name="phone" id="phone" class="form-control" >
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text tresc" id="basic-addon1">E-mail</span>
            <input value="<?php echo $row["email"];?>" name="email" id="email" class="form-control" >
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Copyright</span>
            <input value="<?php echo $row["copyright"]; ?>" name="copyright" id="copyright" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <input class="btn mb-5" type="submit" value="Zapisz">
        <a class="btn mb-5" name="exit" id="exit" href="admin.php" role="button">Wyjdz</a>
	</form>
    <?php }?>
</main>


</body>
</html>