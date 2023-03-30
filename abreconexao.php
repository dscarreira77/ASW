<?php
$servername = "appserver-01.alunos.di.fc.ul.pt";
$username = "asw11";
$password = "miguelgay123";
$dbname = "asw11";
// Cria a ligação à BD
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica a ligação à BD
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
