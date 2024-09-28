<?php 

session_start();

// Check if submitBtn exists
if(isset($_POST['submitBtn'])) {

    $aValue = $_POST['aValue'];

    $bValue = $_POST['bValue'];

    $cValue = $_POST['cValue'];

    $ans = $bValue**2 - 4 * $aValue *  $cValue;

    $_SESSION['answer'] = $ans;

	// Go back to index.php
	header('Location: index.php');
    exit();
}

?>