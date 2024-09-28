<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

	<h1>Discriminant of a Quadratic Equation</h1>

	<form action="handleForm.php" method="POST">
		<p>A:<input type="number" placeholder="Value of A here" name="aValue"></p>
		<p>B:<input type="number" placeholder="Value of B here" name="bValue"></p>
        <p>C:<input type="number" placeholder="Value of C here" name="cValue"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>

    <?php
    if (isset($_SESSION['answer'])) {
    echo "<p>The answer is: " . $_SESSION['answer'] ."</p>";
    unset($_SESSION['answer']);
    }
    ?>
</body>
</html>