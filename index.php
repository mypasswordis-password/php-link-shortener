<?php if(isset($_GET["e"])) {
  $hash = $_GET["e"];
  $db = new SQLite3('my_database.db'); // Create or open the database file

  $db->exec('CREATE TABLE IF NOT EXISTS links (
    id INTEGER PRIMARY KEY,
    hash TEXT,
    link TEXT
)');

/// Read data
  $query = "SELECT link FROM links WHERE hash = '{$_GET["e"]}'";
$result = $db->query($query);

  if ($result) {
    $row = $result->fetchArray();
    if ($row) {
        $link = $row['link'];
    }
}
    $db->close();
  
header("Location: " . $link);
exit; // Make sure to exit to prevent further script execution
}

  ?>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php


echo '<p>Hello World</p>'; 
require "task.php";
$object = new task("Red");
echo $object->doodoo(" and it was ");

  
?> 
<h1>Insert Link</h1>
    <form action="short.php" method="post">
        <label for="text">Enter Link:</label>
        <input type="text" name="link">
        <button type="submit">Submit</button>
  </body>
</html>

