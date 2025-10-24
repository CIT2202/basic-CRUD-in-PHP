<?php
//Connect to the database
try{
    $conn = new PDO('mysql:host=localhost;dbname=MyDatabase', 'MyUsername', 'MyPassword');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//Get the id from the hidden field in the form
$id = $_POST['id'];

//SQL DELETE for deleting rows
//First we need to delete the film's records from the junction table
//Use a prepared statement to bind the id from the form
$stmt = $conn->prepare("DELETE FROM film_genre WHERE film_genre.film_id = :id");
$stmt->bindValue(':id',$id);
$stmt->execute();

//Now we can delete the film
$stmt = $conn->prepare("DELETE FROM films WHERE films.id = :id");
$stmt->bindValue(':id',$id);
$stmt->execute();
//Close the connect
$conn=NULL;
//Redirect to the home page
header('Location: index.php');
die();
?>
