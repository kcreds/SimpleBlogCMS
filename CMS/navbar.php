<?php include('db_conn.php');?> 
<?php $logo = '';
         $query = "SELECT * FROM logo";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)) {?>
<style>
    .logo{
    color: <?php echo $row['logocolor'];?>;
    margin-right: 20px;
    font-size: 25px;
    font-weight: 900;
    letter-spacing: 5px;
    text-decoration: none;
}
.logo:hover{
    color: <?php echo $row['logocolor'];?>;
}
.navbar{
    background-color: #ffb8b1;
    color: #993441;
}
.nav-link{
    color: #993441;
}
.nav-link:hover{
    color: #e72d46;
}
.material-icons{
    color: #993441;
    font-size: 40px;
    font-weight: 900;
}
.navbar-toggler-icon{
  color: white;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.material-icons:hover{
    color: #e72d46;
}
</style>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <?php $logo .= '<a class="logo">'.$row["logotext"].'</a>';} echo $logo;?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link item" href="index.php">Menu</a>
        </li>
      <?php 
         $navitem = '';
         $query = "SELECT * FROM pages";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)) {?>
      <?php $navitem .='
    <li class="nav-item">
          <a class="nav-link item" href=page.php?id='.$row["id"].'>'.$row["menuname"].'</a>
        </li>';}
       echo $navitem; ?>
      </ul>
      <div class="navbar-text logout">
          <a href="login.php"><i class="material-icons" style="font-size:40px;">account_circle</i></a>
      </div>
    </div>
  </div>
</nav>
