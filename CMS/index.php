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
    <title>CMS</title>
</head>
<body class="d-flex flex-column min-vh-100">
    
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="col-md-3 text-end logout">
      <a href="login.php"><i class="material-icons">account_circle</i></a>
      </div>
    </div>
  </div>
</nav>


        <?php include('db_conn.php');?>
        <?php $output = '';
         $query = "SELECT * FROM pages";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)) {
                $output .='
                    <div class="posts">
                    <div class="container">
                    <div class="row">
                    <div class="card mt-5">
                    <img style="width: 100%; max-height: 300px; object-fit: fill;" src="data:image/jpg;charset=utf8;base64, '.base64_encode($row["image"]).'" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">'.$row["menuname"].'</h5>
                        <p class="card-text"><div class="tresc">'. $row["tresc1"].'</div></p>
                        <p class="card-text"><small class="text-muted">'. $row["adddate"].'</small>
                        <a href=page.php?id='.$row["id"].' class="btn float-end">Czytaj</a>
                    </p>   
                    </div>
                    </div>
                    </div>     
                    </div>
                    </div>';
            }
                echo $output; ?>
</body>


<?php include('footer.php');?>


</html>