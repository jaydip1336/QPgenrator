<?php
$conn=mysqli_connect("localhost", "root", "","project") or
    die("Could not connect: " . mysql_error());
// mysql_select_db("project");

$result = mysqli_query($conn,"SELECT id,A FROM 7d6sltu");

while ($row = mysqli_fetch_array($result)) {
    printf("ID: %s  A: %s", $row[0], $row[1]);  
}

mysqli_free_result($result);
?>
