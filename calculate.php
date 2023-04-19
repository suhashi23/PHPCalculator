<?php
    if(isset($_POST['calculate'])){
        $x = $_POST['num1'];
        $y = $_POST['num2'];
        // echo "{$x} {$y}";
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add': 
                $result = $x + $y;
            break;
            
            case 'sub': 
                $result = $x - $y;
            break;
            
            case 'mul': 
                $result = $x * $y;
            break;
            
            case 'div': 
                $result = $x / $y;
            break;
        }
    }
    echo $result;

?>



