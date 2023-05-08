<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/addstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<?php
include "db_conn.php";
include "navigation.php";


$id=$_POST['id'];
$metatitle=$_POST['metatitle'];
$metadesc=$_POST['metadesc'];
$metarobots=$_POST['metarobots'];
$menuname=$_POST['menuname'];
$adddate=$_POST['adddate'];
$nh1=$_POST['nh1'];
$tresc1=$_POST['tresc1']; 
$nh2=$_POST['nh2'];
$tresc2=$_POST['tresc2'];
 
$status = $statusMsg = '';  

        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // foramty 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // z obrazkiem
            $update = $con->query("UPDATE `pages` SET `metatitle`='$metatitle',`metadesc`='$metadesc',`metarobots`='$metarobots',`menuname`='$menuname',`adddate`='$adddate',`nh1`='$nh1',`tresc1`='$tresc1',`nh2`='$nh2',`tresc2`='$tresc2',`image`='$imgContent' WHERE `id`='$id'");
         
             
            if($update){ 
                $status = 'Sukces'; 
                $statusMsg = "Treść strony została zaktualizowana"; 
            }else{ 
                echo "ERROR: $update. ". mysqli_error($update);
                $statusMsg = "Błąd!"; 
            }  
        } 

$update = ("UPDATE `pages` SET `metatitle`='$metatitle',`metadesc`='$metadesc',`metarobots`='$metarobots',`menuname`='$menuname',`adddate`='$adddate',`nh1`='$nh1',`tresc1`='$tresc1',`nh2`='$nh2',`tresc2`='$tresc2' WHERE `id`='$id'");
if(mysqli_query($con, $update)){
    echo ('<br>Treść strony została zaktualizowana<br>');
} else{
    echo "ERROR: $update. " . mysqli_error($update);
}

echo $statusMsg; 
?>
