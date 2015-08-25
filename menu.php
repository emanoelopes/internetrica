
<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Validacao
if (($usuario == abcd) && ($senha == "123")){
        echo "<a href='fatorial.php'>Fatorial</a></br>";
        echo "<a href='mdc.php'>MDC</a></br>";
        echo "<a href='form.html'>Formulário</a></br>";

}else {

        echo '<div class="alert alert-danger" role="alert">usuario/senha incorreto. Tente novamente.</div>';

}
?>
