<html>

<head>
<title>BD_01</title>
    <!-- HTML 4 -->
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->

  
    <!-- HTML5 -->
    <meta charset="utf-8"/> 
</head>
    
<body> 


<?php
$nome = $_POST ["nome"];
$mensagem = $_POST ["mensagem"];
$imagem = $_POST ["imagem"];

//Config. para acesso ao mySql no infinitFree (hairon) 
/*$servername = "sql101.epizy.com";
$username = "epiz_25968604";
$password = "gNRO99MOv4TvsEP"; 
$dbname = "epiz_25968604_hairon";*/


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



$sql = "INSERT INTO chave_valor (nome, mensagem, imagem) VALUES ('$nome','$mensagem','$imagem')";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Os registros foram inseridos com sucesso.";
} else {
    echo "N�o foi poss�vel executar ($sql) no banco de dados: $dbname <br>  " . mysqli_error($conn);
    exit;
}

?>
</body></html>