<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>

</head>

<body>

    <form action="" method="post">

        <input type="text" name="number1" value="<?php                                   
        if (isset($_POST["number1"])) {                                                  
            echo $_POST["number1"]; 
        }
        ?>" />

        <input type="text" name="number2" value="<?php                                    
        
        if (isset($_POST["number2"])) {                                             
            echo $_POST["number2"]; 
        }
        ?>" />

        <input type="submit" name="operation" value="+" style="<?php 
        if (isset($_POST["operation"]) && $_POST["operation"] == "+") { 
            echo 'background-color: gray;';
        }
        ?>" />

        <input type="submit" name="operation" value="-" style="<?php 
        if (isset($_POST["operation"]) && $_POST["operation"] == "-") { 
            echo 'background-color: gray;'; 
        }
        ?>" />
        <input type="submit" name="operation" value="x" style="<?php 
        if (isset($_POST["operation"]) && $_POST["operation"] == "x") { 
            echo 'background-color: gray;'; 
        }
        ?>" />
        <input type="submit" name="operation" value="/" style="<?php 
        if (isset($_POST["operation"]) && $_POST["operation"] == "/") { 
            echo 'background-color: gray;'; 
        }
        ?>" />

    </form>

    <?php
    
    function calculate($number1, $number2, $operation) 
    
    {

        if (str_contains($number1, ',') || str_contains($number2, ',')) { 
            $number1 = str_replace(",", ".", $number1); 
            $number2 = str_replace(",", ".", $number2); 
        }

        if ($operation == "+") { 
    
            echo "result : " . ($number1 + $number2); 
    
        } else if ($operation == "-") { 
    
            $result = $number1 - $number2; 
    
            echo "result:" . $result; 
    
        } else if ($operation == "/" ) { 
    
            if($number2 == "0"):
                echo "A number cannot be divided by zero. Please enter another number."; 
            else:
                $result = $number1 / $number2; 
                echo "result:" . $result; 
            endif;
    
        } else { 
    
            $result = $number1 * $number2;
            echo "result:" . $result;

        }

    }

    if (isset($_POST["operation"])) {
        calculate($_POST["number1"], $_POST["number2"], $_POST["operation"]); 
    
    }

    ?>

</body>

</html>