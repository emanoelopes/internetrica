<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>MDC</title>
</head>
        <body>
        <h1>MDC</h1>
        <form action="mdc.php" method="post">
                <input type="text" name="n1" placeholder="digite o primeiro numero"/>
                <input type="text" name="n2" placeholder="digite o segundo numero"/>

                <input type="submit" value="calcular"/>
        </form>
<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
function mdc($n1, $n2){
    $a = max($n1, $n2);
    $b = min($n1, $n2);
    if($a%$b == 0){
            return $b;
    } else {
        return mdc($b, ($a%$b));    
    }
}
echo mdc($n1,$n2);
?>
</body>
</html>
