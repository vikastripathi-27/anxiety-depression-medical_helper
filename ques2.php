<?php
session_start();
?>
<?php

$name="Vikas";


echo "<h3 class='intro'>Doctor : Welcome $name <br></h3><br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient-Doctor Interaction</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="back">
	
<form>
	<div class="form">
	<h4 class="question">How many hours do you work a day?</h4>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query11">Less than 6 hours</p>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query12">Around 8 hours</p>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query12">More 8 hours</p>
	<br>
	<br>

<?php
if(isset($_GET['send'])) {
	$patient_query=$_GET['patient_query1'];	
	if($patient_query=="patient_query11") {
		echo "<p class='doc_response'>Doctor : Working for very less time would have nothing to do in a day, which makes you feel lonely and makes you feel depressed<br></p>";
	}
	elseif($patient_query=="patient_query12") {
		echo "<p class='doc_response'>Doctor : That is ideal time for working<br></p>";
	}
	else {
		echo "<p class='doc_response'>Doctor : That is too much working time for a person. It will make you overworked and tired at the end of the day<br>.</p>";
	}
}
?>
<br>
<h4 class="question">Have you encountered sudden high weightloss recently?</h4>
	<p class="option"><input type="radio" name="patient_query2" value="patient_query21">Yes</p>
	<p class="option"><input type="radio" name="patient_query2" value="patient_query22">No</p>
	<br>
	<br>

<?php
if(isset($_GET['send'])) {
	$patient_query=$_GET['patient_query2'];	
	if($patient_query=="patient_query21") {
		echo "<p class='doc_response'>Doctor : I would prefer you to have a nutrious diet and monitor your weight every 7 days and if you still encounter high weightloss please consult to a nearby doctor.<br></p>";
	}
	else {
		echo "<p class='doc_response'>Doctor : That is good.<br></p>";
	}
}
?>
<br>
<h4 class="question">How much average sleep do you have daily?</h4>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query31">Less than 6 hours</p>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query32">8 hours approximately</p>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query32">More than 8 hours</p>
	<br>
	<br>

<?php
if(isset($_GET['send'])) {
	$patient_query=$_GET['patient_query3'];	
	if($patient_query=="patient_query31") {
		echo "<p class='doc_response'>Doctor : Proper sleep is very necessary for a healthy mind and I would suggest you to have a proper sleep of around 8 hours<br></p>";
	}
	elseif ($patient_query=="patient_query32") {
		echo "<p class='doc_response'>Doctor : That is the accurate average time of sleep that you should have daily.<br></p>";
	}
	else {
		echo "<p class='doc_response'>Doctor : Okay<br></p>";
	}
	echo "<a href='ques3.php'><u class='next'>Onto the next set of questions<br></u></a>";
}
?>
<br>
	<input type="submit" name="send" value="Send" class="btn btn-success btn-lg">
</div>
</form>
</body>
</html>


