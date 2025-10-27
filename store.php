<?php
// Connect to the database
try {
    $conn = new PDO('mysql:host=localhost;dbname=MyDatabase', 'MyUsername', 'MyPassword');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Oh no, there was a problem" . $exception->getMessage();
}


//This is a simple example we would normally do some form validation here

//Basic form processing
//Look at the name values of the form controls in create.php to see where these values 
// e.g. $_POST['title'] comes from <input type="text" id="title" name="title">
$title = $_POST['title'];
$year = $_POST['year'];
$duration = $_POST['duration'];
$certId = $_POST['certId'];

//SQL INSERT for adding a new row
//Use a prepared statement to bind the values from the form
$query = "INSERT INTO films (id, title, year, duration, certificate_id) VALUES (NULL, :title, :year, :duration, :certId)";
$stmt = $conn->prepare($query);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':year', $year);
$stmt->bindValue(':duration', $duration);
$stmt->bindValue(':certId', $certId);
$stmt->execute();
//Close the connection
$conn = NULL;
//Redirect the user to the home page
header('Location: index.php');
die();
