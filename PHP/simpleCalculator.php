<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>
        <form action="site.php" method="post">
            First number: <br> <input type="number" step="0.001" name="num1"> <br>
            Second number: <br> <input type="number" name="num2"> <br>
            OP: <br> <input type="textbox" name="op"> <br>
        
            <input type="submit">
        </form>
        
        <?php 
            function add($num1, $num2){
                return $num1 + $num2;
            }

            function subt($num1, $num2){
                return $num1 - $num2;
            }

            function mult($num1, $num2){
                return $num1 * $num2;
            }

            function div($num1, $num2){
                if ($num2 == 0){
                    return "You must not divide by 0!";
                }

                else{
                    return $num1/$num2;
                }
            }
            
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];
            $result;

            switch($op){
                case "+":
                    $result = add($num1, $num2);
                    break;
                case "-":
                    $result = subt($num1, $num2);
                    break;
                case "*":
                    $result = mult($num1, $num2);
                    break;
                case "/":
                    $result = div($num1, $num2);
                    break;
                default:
                    echo "Invalid operator.";
            }

            echo "Result is ";
            echo $result;

        ?>
    </body>
</html>