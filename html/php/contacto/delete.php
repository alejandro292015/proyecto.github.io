<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM CONTACTO WHERE CodDocumento=:CodDocumento";
$query = $SOEXBD->prepare($sql);
$query->execute(array(':CodDocumento' => $id));

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>