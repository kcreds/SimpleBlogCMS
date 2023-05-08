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
    <script src="tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'#tresc1', skin: "CUSTOM"});</script>
    <script>tinymce.init({selector:'#tresc2', skin: "CUSTOM"});</script>
    
    <title>Add</title>
</head>
<body>
<?php include 'navigation.php';?>
    <div class="container mt-5">
    <main class="col-md-9 col-lg-12 px-md-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dodaj</h1>
	</div>
		<form method="post" action="savepage.php" enctype="multipart/form-data">
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Meta-Title</span>
            <input name="metatitle" id="meta-title" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Meta-Desc</span>
            <input name="metadesc" id="meta-desc" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-4">
        <label class="input-group-text" for="inputGroupSelect01">Znacznik Meta-Robots</label>
        <select name="metarobots" id="metarobots" class="form-select" id="inputGroupSelect01">
            <option name="if" id="if" value="index, follow" selected="">index, follow</option>
			<option name="in" id="in" value="index, nofollow">index, nofollow</option>			
			<option name="nf" id="nf" value="noindex, follow">noindex, follow</option>
			<option name="nn" id="nn" value="noindex, nofollow">noindex, nofollow</option>
        </select>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Nazwa w menu</span>
            <input name="menuname" id="menu-name" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Miniaturka</span>
            <input name="image" id="image" type="file" class="form-control" accept="image/png, .jpeg, .jpg, image/gif" required/>
        </div>
        <!-- <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Treść w slajdzie nr 1</span>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Treść w slajdzie nr 2</span>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div> -->
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Nagłówek H1</span>
            <input name="nh1" id="nh1" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Treść</span>
            <textarea name="tresc1" id="tresc1" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Nagłówek H2</span>
            <input name="nh2" id="nh2" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="mb-4">
            <span class="input-group-text tresc" id="basic-addon1">Treść</span>
            <textarea name="tresc2"  id="tresc2" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <input class="btn mb-5" name="submit" type="submit" value="Zapisz">
        <a class="btn mb-5" name="exit" id="exit" href="admin.php" role="button">Wyjdz</a>
	</form>
</main>

        
    
</body>
</html>