<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="homestyle.css">
    <title>CMS</title>
</head>
<body>
    
        <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                 <li class="nav-item">
                 <a class="nav-link active" href="#">Link</a>
                </li>
                
                <!-- <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>  -->
        
            </ul>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                    <ul class="navbar-nav ms-auto flex-nowrap">
                        <li class="nav-item ">
                            <a class="nav-link active" href="login.php">A</a>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>

        <div class="posts">
        <div class="container">

        <div class="row">
        <div class="card mt-5">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Tytuł</h5>
            <p class="card-text">This is a wider with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">1h</small>
            <a href="test.php" class="btn float-end">Go somewhere</a>
        </p>
            
        </div>
        </div>
        </div>


    </div>
    </div>

</body>
<?php
    include "footer.php";
?>
</html>