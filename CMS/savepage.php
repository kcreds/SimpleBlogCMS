<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}?>

<?php include('db_conn.php');
include "navigation.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/addstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<?php 

$metatitle=trim($_POST['metatitle']);
$metadesc=trim($_POST['metadesc']);
$metarobots=trim($_POST['metarobots']);
$menuname=trim($_POST['menuname']);
$nh1=trim($_POST['nh1']);
$tresc1=trim($_POST['tresc1']);
$nh2=trim($_POST['nh2']);
$tresc2=trim($_POST['tresc2']);
 
$status = $statusMsg = ''; 
    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 

            $insert = $con->query("INSERT into pages (`metatitle`,`metadesc`,`metarobots`,`menuname`,`adddate`,`nh1`,`tresc1`,`nh2`,`tresc2`, image) VALUES ('$metatitle','$metadesc','$metarobots','$menuname',curdate(),'$nh1','$tresc1','$nh2','$tresc2','$imgContent')"); 
            if($insert){
                $status = 'Sukces'; 
                $statusMsg = "Zapisano!"; 
            }
        }else{ 
            $statusMsg = 'Tylko JPG, JPEG, PNG, & GIF'; 
        }  
} 
 
echo $statusMsg; 
?>


