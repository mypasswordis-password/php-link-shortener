<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the text input value from the form
    require "classes/test.php";
    $db = new SQLite3('my_database.db'); // Create or open the database file
    $link = $_POST["link"];
    $letters = "abcdefghijklmnopqrstuvwxyz";
    $random_hash = substr(str_shuffle($letters), 0, 3);
    $object = new shortener($link, $random_hash, $db);

    
  
    
    // You can process the $link variable here as needed
    // 
    echo "<a href='https://confuseddecisiveportablesoftware.thelegend27son.repl.co/?e=" . $random_hash . "'>Save this link</a>";
}

?>

