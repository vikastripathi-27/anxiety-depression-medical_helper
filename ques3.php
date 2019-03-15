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
<body class="back"">
	
<form>
	<div class="form">
	<h4 class="question">Are you having trouble while making decisions?</h4>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query11">Yes</p>
	<p class="option"><input type="radio" name="patient_query1" value="patient_query12">No</p>
	<br>
	<br>

<?php
if(isset($_GET['send'])) {
	$patient_query=$_GET['patient_query1'];	
	if($patient_query=="patient_query11") {
		echo "<p class='doc_response'>Doctor : I would suggest you to have a calm mind while making decisions and if possible meditate during your free time.<br></p>";
	}
	else {
		echo "<p class='doc_response'>Doctor : That's awesome<br></p>";
	}
}
?>
<br>
<h4 class="question">Do you think of death or have thoughts of suicide?</h4>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query31">Yes,sometimes</p>
	<p class="option"><input type="radio" name="patient_query3" value="patient_query32">No</p>
	<br>
	<br>

<?php
if(isset($_GET['send'])) {
	$patient_query=$_GET['patient_query3'];	
	if($patient_query=="patient_query31") {
		echo "<p class='doc_response'>Doctor : If so I woud sugeest you to consult a psychiatrist as well as a therapist<br></p>";
	}
	else {
		echo "<p class='doc_response'>Doctor : That's looks like you are fine enough.Have a good time<br></p>";
	}
	echo "<br>";
	echo "<br>";
	echo "<p class='doc_response'>As an additional suggestion I would recommend you to listen to some sort of music which you like that provides peace and calm to your mind.<br></p>";
}
?>
<br>
	<input type="submit" name="send" value="Send" class="btn btn-success btn-lg">
	<?php
	if (isset($_GET['send'])) {
		echo "<br><a href='exit.php'><u class='next'><br>Exit</u></a>";
	}
	?>
</div>
</form>
</body>
</html>


