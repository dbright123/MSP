<?php 
     
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            //echo "Hello {$id}";
            $filename = "{$id}.txt";
            if (file_exists($filename)) {
                if(isset($_GET["result"])){
                    if($_GET["result"] === "demand"){
                        $file_contents = file_get_contents($filename);
                        echo $file_contents;
                    }else{
                        echo "NA";
                    }
                }else{
                    echo "registered";
                }
                
            } else {
                echo "NA";
            }
            
        }else{
            echo "NA";
        }
        
        
        
    }
    else if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Create a PHP array containing some data
        $id = strval($_POST["id"]);
        $ticket = strval($_POST["Ticket"]);
        $symbol = strval($_POST["Order_name"]);
        $type = strval($_POST["Order_type"]);
        $size = strval($_POST["Lot_size"]);
        $price = strval($_POST["Price"]);
        $sl = strval($_POST["Sl"]);
        $tp = strval($_POST["Tp"]);
        $comment = strval($_POST["Order_comment"]);
        
        $data = $id."-".$ticket."-".$symbol."-".$type."-".$size."-".$price."-".$sl."-".$tp."-".$comment;
        // Open a file for writing
        $file = fopen("{$id}.txt", "w");
        
        // Write a string to the file
        fwrite($file, $data);
        
        // Close the file
        fclose($file);
        
        echo $id . " data uploaded successfully";
        
    }else{
        echo "These method is not accepted for program";
    }
    
?>