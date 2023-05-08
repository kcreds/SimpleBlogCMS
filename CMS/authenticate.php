<?php
session_start();

include("db_conn.php");


if ( !isset($_POST['username'], $_POST['password']) ) {

	exit('Wypełnij wszystkie pola!');
}


if ($stmt = $con->prepare('SELECT id, password FROM admins WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: admin.php');
        } else {

            echo 'Zle dane!';
        }
    } else {
        echo 'Zle dane!';
    }

	$stmt->close();
}
?>

