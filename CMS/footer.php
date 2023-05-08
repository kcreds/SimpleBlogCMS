<?php include('db_conn.php');?>
        <?php
         $query = "SELECT * FROM footer";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)) {?>          
     
<footer class="mt-auto">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 fitem">
      <li class="nav-item "><a  class="nav-link fitem px-2 "><?php echo $row["name"];?></a></li>
      <li class="nav-item "><a  class="nav-link fitem px-2 "><?php echo $row["street"];?></a></li>
      <li class="nav-item "><a  class="nav-link fitem px-2 "><?php echo $row["address"];?></a></li>
      <li class="nav-item "><a  class="nav-link fitem px-2 "><?php echo $row["city"];?></a></li>
      <li class="nav-item "><a  class="nav-link fitem px-2 ">NIP: <?php echo $row["nip"];?></a></li>
      <li class="nav-item "><a  class="nav-link fitem px-2 "><?php echo $row["phone"];?></a></li>
      <li class="nav-item "><a  class="nav-link fitem px-2 "><?php echo $row["email"];?></a></li>
    </ul>
    <p class="text-center fitem "><?php echo $row["copyright"];?></p>
  </footer>


<?php }?>
