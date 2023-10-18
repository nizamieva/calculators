    <?php
    if(isset($_POST['calculate'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        if(is_numeric($num1) && is_numeric($num2)){
            switch($operator){
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    if($num2 != 0){
                        $result = $num1 / $num2;
                    } else {
                        echo "Деление на ноль невозможно.";
                    }
                    break;
                default:
                    echo "Неверный оператор.";
            }

            echo "Результат: $result";
        } else {
            echo "Пожалуйста, введите числа.";
        }
    }
    ?>
