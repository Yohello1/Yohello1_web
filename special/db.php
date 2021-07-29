 <?php
echo "HELLO";
//Define PDO
$pdo = new PDO('sqlite:test1.db');
//Make command
$statement = $pdo->query("SELECT * FROM people");
# $statement = $pdo->query;
//run the sql
$column = 1;
$rows = $statement->fetchAll();
echo "<br>";
//show it on screen
$i = 0;
while ($i < count($rows)) {
echo $rows[$i]['first_name'];
echo "<br>";
$i++;
}
