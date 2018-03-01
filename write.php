<?php

    // Prepare variables for database connection
   
    $dbusername = "kevin";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "kevin";  // enter database password, I used "arduinotest" in step 2.2
    $server = "10.20.24.29"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

    $dbconnect = mysql_pconnect($server, $dbusername, $dbpassword);
    $dbselect = mysql_select_db("test",$dbconnect);

    // Prepare the SQL statement

    $sql = "INSERT INTO test.sensor (value) VALUES ('".$_GET["value"]."')";    

    // Execute SQL statement

    mysql_query($sql);

?>