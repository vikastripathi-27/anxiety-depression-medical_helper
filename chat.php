<?php
session_start();
?>
<?php

$name="Vikas";


echo "<h3 class='intro'>Doctor :Hii, $name ... It's great to meet you!<br></h3><br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient-Doctor Interaction</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="back">
	<br>
<form>
	<div class="form">
	<h4 class="question"><br>How are you feeling right now?<br><br></h4>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query11">Happy</p>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query12">Content</p>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query13">Depressed</p>
	<br>

<?php
if(isset($_GET['send'])) {
	$patient_query=$_GET['patient_query1'];	
	if($patient_query=="patient_query11") {
		echo "<p class='doc_response'>Doctor : Ohh that's nice<br></p>";
	}
	elseif($patient_query=="patient_query12") {
		echo "<p class='doc_response'>Doctor : Okay, you're at the right place<br></p>";
	}
	else {
		echo "<p class='doc_response'>Doctor : Sorry to hear about it, but we're here to help you</p>";
	}
}
?>
<br>
<br>
<h4 class="question">Have you ever consumed any intoxicating substances?</h4>
	<p class="option"><input type="radio" name="patient_query2" value="patient_query21">Yes</p>
	<p class="option"><input type="radio" name="patient_query2" value="patient_query22">No</p>
	<br>
<?php
if(isset($_GET['send'])) {
	$patient_query=$_GET['patient_query2'];	
	if($patient_query=="patient_query21") {
		echo "<p class='doc_response'>Doctor : Please stop consuming intoxicating substances as soon as possible<br></p>";
	}
	else {
		echo "<p class='doc_response'>Doctor : Okay<br></p>";
	}
}
?>
<br>
<h4 class="question">What is your age group?</h4>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query31">15 to 20</p>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query32">20 to 35</p>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query32">35 to 50</p>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query32">50+</p>
	<br>
	<br>

<?php
if(isset($_GET['send'])) {
	echo "<a href='ques2.php'><u class='next'>Onto the next set of questions<br></u></a>";
}
?>
<br>
	<input type="submit" name="send" value="Send" class="btn btn-success btn-lg">
</div>
</form>
</body>
</html>


