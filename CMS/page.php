<?php include('db_conn.php');?>
        <?php
         $query = "SELECT * FROM pages WHERE id='$_GET[id]'";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)) {?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/indexstyle.css">
    <title><?php echo $row["metatitle"]; ?></title>
    <meta name="description" content="<?php echo $row["metadesc"]; ?>">
    <meta name="robots" content="<?php echo $row["metarobots"]; ?>">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="col-md-3 text-end logout">
      <a href="login.php"><i class="material-icons">account_circle</i></a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-5">

    <div class= "row mt-2 mb-5">
    <div class="col">
        <h1><?php echo $row["nh1"];?></h1>
    </div> 
    </div>
    <div class= "row mt-2 mb-4">
    <div class="col">
        <?php echo $row["tresc1"];?>
    </div>
    </div>
    <div class= "row mt-2 mb-4">
    <div class="col">
        <h2><?php echo $row["nh2"];?></h2>
    </div>
    </div>
    <div class= "row mt-2">
    <div class="col">
        <?php echo $row["tresc2"];?>
    </div>
</div>
            </div>

<?php }?>
</body>

<?php include('footer.php');?>

</html>
