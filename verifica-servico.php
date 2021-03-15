<?php

// $serv = $_POST['serv'];

// $strcon = mysqli_connect('sql10.freesqldatabase.com','sql10398989','IQ8vg1RESx','sql10398989') or die('Erro ao conectar ao banco de dados');
// $sql = "SELECT desc from servico where nome = '$serv'"; 
// mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
// json_encode(mysqli_query($strcon,$sql));
// mysqli_close($strcon);

$servername = "sql10.freesqldatabase.com";
$username = "sql10398989";
$password = "IQ8vg1RESx";
$dbname = "sql10398989";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO servico (nome, descr, tipo)
VALUES ('eletricista', 'cabeamento', 'elétrica')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "SELECT * FROM servico where id = 5";
echo '<br>' . $sql2;

$conn->close();
?>

?>