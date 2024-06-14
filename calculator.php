<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="get">
        <input type="Number" name="num01" placeholder="NUmber one">
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="Number" name="num02" placeholder="NUmber Two">
    <button>calculate</button>
    </form>

    
    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $num01 = filter_input(INPUT_POST,"num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST,"num02",FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlentities($_POST["operator"]);
    
       //Error handles
       $errors = false;
       if (empty($num01) || empty($num02) ||empty($operator)) {
        echo "<p class='calc-error'>Fill in all the fields!</p>";
        $errors = true;
   
    }
    if (!is_numeric($num01) || !is_numeric($num02)) {
        echo "<p class='calc-error'>ONly Write numbers!</p>";
        $errors = true;
   
    }
       // Calculate the numbers if no errors

       if (!$errors){
        $value=0;
            switch ($operator){
                case "add":
                    $value = $num01 + $num02;
                    break;
                    case "sub":
                        $value = $num01 - $num02;
                        break;
                        case "mul":
                            $value = $num01 * $num02;
                            break;
                            case "div":
                                $value = $num01 / $num02;
                                break;
                                default:
                                echo "<p class ='calc-error'>Nothing Match!</p>";
            }
            echo "<p class='calc-result'>Result = ". $value ."</p>;
        }
    }
    ?>
        
    
        
       
        
    
    
</body>
</html>