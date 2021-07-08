<html>
<head>
<title>BD_01</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
    
<body> 


<?php

header('Content-type: text/html; charset=utf-8');
    



//Config. para acesso ao mySql localmente 
$servername = "sql106.epizy.com";
$username = "epiz_29089662";
$password = "EgHEBSIsJMz5p";
$dbname = "epiz_29089662_feed"; 

$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
  die("Falha na Conex�o: " . mysqli_connect_error());
}
echo "Conectado com Sucesso <BR><BR>";

// Selecionando banco
if (!mysqli_select_db($conn,$dbname)) {
    echo "N�o foi poss�vel selecionar base de dados \"$dbname\": " . mysqli_error($conn);
    exit;
}


$sql = "SELECT nome, mensagem, imagem FROM chave_valor";

$result = mysqli_query($conn, $sql);

if (!$result) {
  die("Falha na Execu��o da Consulta: " . $sql ."<BR>" .
      mysqli_error($conn));
}

if (mysqli_num_rows($result) == 0) {
    echo "N�o foram encontradas linhas, nada para mostrar <BR>";
    exit;
}

// Enquanto uma linha de dados existir, coloca esta linha em $row como uma matriz associativa { dici�ario tipo chave (campo) / valor (registro) }
$chave="";
while ($row = mysqli_fetch_assoc($result)) {
	$chave=$row["chave"];
    echo 'Nome: '.$nome."<br>";
    echo 'mensagem: '.$mensagem.'<br>';
    echo '' .$imagem.'<br>';
    echo "<a href=deletar.php?chave=$chave> delete </a><br><br>";

} 

mysqli_free_result($result); 

?>

</body></html> 