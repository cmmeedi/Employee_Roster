<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css"/>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
      integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
      crossorigin="anonymous"
    ></script>

    <title>Employee App</title>
  </head>
<body>

<?php 

//This includes the code to be able to connect to the DB
include "db_connector.php";
//This includes the code to be able to search and display all the jokes in the DB

?>
<!-- This is the form to allow the user to search for keywords to pull up jokes containing those keywords within the db -->
    <div id="employeeSearch" class="container">
      <form action="search_employee.php">
        <div class="form-group">
          <label for="employee" class="display-4"> Search for employee </label>
          <input
            type="text"
            class="form-control col-4"
            id="employee"
            name="employee"
            aria-describedby="employeeSearch"
          />
          <small id="employeeSearchHelp" class="form-text text-muted"
            >Enter the employee you would like to search</small
          >
        </div>
        
        <button type="submit" class="btn btn-primary">Search</button>
        
      </form>
    </div>

<hr>

<!-- This is the form to allow the user to add a joke with an answer -->
    <div id="add_Employee" class="container">
        <form action="add_Employee.php">
          <div class="form-group">
            <label for="newEmployee" class="display-4">Add employee</label>
            <br>
            <label for="first_Name"> Employees first name </label>
            <input
              type="text"
              class="form-control col-4"
              id="first_Name"
              name="first_Name"
              aria-describedby="first_Name"
            />
            
            <label for="last_Name"> Employees last name </label>
            <input
              type="text"
              class="form-control col-4"
              id="last_Name"
              name="last_Name"
              aria-describedby="last_Name"
            />
            
          <label for="dept_Name"> Department of employee </label>
          <input
          	type="text"
          	class="form-control col-4"
          	id="dept_Name"
          	name="dept_Name"
          	aria-describedby="dept_Name"
          />
        </div>
          
        <button type="submit" class="btn btn-primary">Add</button>
          
        </form>
    </div>


<?php


    //Then the DB is closed
$conn->close();
?>

</body>
</html>