<?php 

//and used to try to connect to the db
if($conn->connect_errno){
    //if a piece of the data is wrong this error message will be displayed
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ")" . $conn->connect_error;
}
//other wise it will show a little message letting the user know the app is connected to the database
echo $conn->host_info . "<br>";

//this is an SQL statement to pull the data from each row of the `jokes` table
$sql = "SELECT id, first_Name, last_Name, dept_Name FROM employees_table";
//this variable tests the db connection and then querires it for the information saved in the `sql` variable
$result = $conn->query($sql);

//if the table is not empty
if($result->num_rows > 0){
    //the row is selected
    while($row = $result->fetch_assoc()){
        //And a concatenated string is created for each row
        echo "id: " . $row["id"] . " Employee: " . $row["first_Name"] .
        " " . $row["last_Name"] . $row["dept_Name"] . "<br>";
    }
} else{
    //otherwise this message is displayed to let the user know there are no results
    echo "0 results";
}

?>