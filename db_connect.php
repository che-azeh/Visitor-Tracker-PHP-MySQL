<?php
//change these values to whatever your own database server requires
$link = new mysqli('localhost', 'root', 'growthisconstant','iptracker'); //Connects to the database at "localhost"
if(!$link) {
    //halt execution if cannot connect
    die("Cannot connect to the database!");
}
// mysqli_select_db('iptracker', $link); //Assuming you have a database named "test" set up
?>