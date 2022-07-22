<?php

//The file with the db connection code needs to be included in this file
include "db_connector.php";

$new_first_Name = $_GET["first_Name"];
$new_last_Name = $_GET["last_Name"];
$new_dept_Name = $_GET("dept_Name");

//By using the 'addslashes()' method the jokes can be properly inserted into the table with punctuations like apostrophes
$new_first_Name = addslashes($new_first_Name);
$new_last_Name = addslashes($new_last_Name);
$new_dept_Name = addslashes($new_dept_Name);

//This SQL statement will search the database for any rows containing the keyword that was searched for.
echo "<h2>The Employee : '" . $new_first_Name . " " . $new_last_Name . "' has been added to the db</h2>";
echo "<h2>in Depertment '" . $new_dept_Name;

//This statement is used to insert data into the database.  The number at the end represents the user and will need to be edited later
$sql = "INSERT INTO employees_table (ID, first_Name, last_Name, dept_Name) VALUES (NULL, '$first_Name', '$last_Name', '$dept_Name')";
//this variable tests the db connection and then querires it for the information saved in the `sql` variable
//The die() method prevents the variable from being added to the table, the 'mysqli_error' method displayes the error of the db connection '$conn'
$result = $conn->query($sql) or die(mysqli_error($conn));

include "search_all_employees.php"
?>
<a href="index.php">Return to the homepage</a>