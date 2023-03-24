<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste/Api</title>
</head>
<body>
<?php 

$url = "https://swapi.dev/api/people/?page=2";
$pd = curl_init($url);
curl_setopt($pd, CURLOPT_RETURNTRANSFER, true);
curl_setopt($pd, CURLOPT_SSL_VERIFYPEER, false);
$resultado= json_decode(curl_exec($pd));

//var_dump ($resultado);

foreach($resultado->results as $ator) {
    //var_dump($ator);
    echo "Nome: ". $ator ->name . "<br>";
    echo "Altura: ". $ator->height. "<br>";
}
?>
</body>
</html>