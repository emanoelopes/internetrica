<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>Fatorial</title>
</head>
<body>
<h1>Fatorial</h1>
 <form method="post" action="fatorial.php">
<div class="input-group">        
<input type="text" class="form-control" name="n" placeholder="digite um numero"/>
<span class="input-group-btn">
<button class="btn btn-default" type="button">Calcular</button>
</span>
</div>
</form>
<?php
function fat($n){
        $n = $_POST['n'];
        //Fatorial de zero.
        if($n == 0){
                $n = 1;
        }
//calculando o fatorial
for($i = $n; $i > 1; $i--){
    $n = $n*($i -1);
}
return $n;
}
?>
</br></br>
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close"  data-dismiss="alert" arial-label="Close"><span atia-hidden="true">&times;</span></button>
<strong>Resultado: </strong><?php echo fat($n);?>
</div>
</body>

</html>
