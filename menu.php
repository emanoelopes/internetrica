<!DOCTYPE html>
<meta charset="UTF-8">
<style>
header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
nav {
    line-height:30px;
    background-color:#eeeeee;
    height:300px;
    width:100px;
    float:left;
    padding:5px;
}
section {
    width:350px;
    float:left;
    padding:10px;
}
footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
</style>
<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Validacao
if (($usuario == abcd) && ($senha == "123")){
        echo "<header>";
        echo "<h1>Internet Rica</h1>";
        echo "</header>";
        echo "<nav>";
        echo "<a href='fatorial.php'>Fatorial</a></br>";
        echo "<a href='mdc.php'>MDC</a></br>";
        echo "<a href='form.html'>Formulário</a></br>";
        echo "</nav>";
}else {

        echo '<div class="alert alert-danger" role="alert">usuario/senha incorreto. Tente novamente.</div>';

}
?>
<section>
<h1>Disciplina de Internet Rica</h1>
<p>Parte integrante do curso de ADS</p>
</section>
<footer>
ADS | Prof. Paulo Vilar
</footer>
