<?php 
    $id = $_POST["id"];
    $ticket = 0;
    $type = "";
    $size = 0;
    $symbol = "";
    $price = 0;
    $sl = 0;
    $tp = 0;
    $comment = "";   
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Access GET request parameters using $_GET superglobal
        $name = $_GET['name'];
        $age = $_GET['age'];
    
        // Process GET request
        //echo "Hello {$name}, you are {$age} years old!";
        // Get the query string from the request URL
        $query_string = $_SERVER['QUERY_STRING'];
        
        // Parse the query string into an array of key-value pairs
        parse_str($query_string, $queries);
        
        // Output the array of queries
        print_r($queries);
        echo "Get request loading {$name} <br />";
        
    }
    else if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Create a PHP array containing some data
        $id = $_POST["id"];
        $ticket = 0;
        $type = "";
        $size = 0;
        $symbol = "";
        $price = 0;
        $sl = 0;
        $tp = 0;
        $comment = "";
        echo $id;
        
    }else{
        echo "These method is not accepted for program";
    }
    
?>