<?php
 echo '
 <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="addpage.php">Dodaj</a>
      </li> 
      <li class="nav-item">
      <a class="nav-link active" href="editpages.php">Edytuj</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="editfooter.php">Stopka</a>
      </li>
      </ul>
      <div class="col-md-3 text-end logout">
      <a href="logout.php"><i class="material-icons" style="font-size:36px; color:white;">input</i></a>
      </div>
    </div>
  </div>
</nav>';

            ?>