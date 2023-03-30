<!DOCTYPE html>
<html>
<head>
    <title>Formulário de cadastro de usuário</title>
</head>
<body>
    <h1>Formulário de cadastro de usuário</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required pattern="[A-Za-z ]+" title="Digite somente letras." /><br><br>
        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" id="data_nasc" name="data_nasc" required /><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required /><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" minlength="8" required /><br><br>
        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" required>
            <option value="">Selecione</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
        </select><br><br>
        <label for="morada">Morada:</label>
        <input type="text" id="morada" name="morada" required /><br><br>
        <label for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal" required pattern="\d{4}-\d{3}" title="O código postal deve estar no formato XXXX-XXX"/><br><br>
        <label for="localidade">Localidade:</label>
        <input type="text" id="localidade" name="localidade" required /><br><br>
        <label for="telemovel">Telemóvel:</label>
        <input type="tel" id="telemovel" name="telemovel" required pattern="\d{9}" title="O telemóvel deve ter 9 numeros"/><br><br>
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="username" required /><br><br>
        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Estabelece uma ligação com a base de dados usando o programa abreconexao.php
// A variável $conn é inicializada com a ligação estabelecida

include "abreconexao.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Validando os dados recebidos
        $nome = test_input($_POST["nome"]);
        $data_nasc = test_input($_POST["data_nasc"]);
        $email = test_input($_POST["email"]);
        $senha = test_input($_POST["senha"]);
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $genero = test_input($_POST["genero"]);
        $morada = test_input($_POST["morada"]);
        $codigo_postal = test_input($_POST["codigo_postal"]);
        $localidade = test_input($_POST["localidade"]);
        $telemovel = test_input($_POST["telemovel"]);
        $username = test_input($_POST["username"]);

        if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
            echo "O nome deve conter apenas letras e espaços em branco.";
        }
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Formato de e-mail inválido.";
        }
	elseif (strlen($senha) < 8) {
            echo "A senha deve ter pelo menos 8 caracteres.";
        }
	else {
              echo "Cadastro efetuado com sucesso!";
            //Aqui você pode inserir os dados do usuário em um banco de dados ou fazer qualquer outra coisa que precise ser feita.
        }

$stmt = $conn->prepare("INSERT INTO utilizador (username, senha, nome, genero, email, data_nascimento, morada, telemovel, localidade, cod_postal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Retrieve the date of birth from the HTML form
$date_of_birth = $_POST['data_nasc'];

// Create a DateTime object with the date string
$date = new DateTime($date_of_birth);

// Format the date as a string in the required format (YYYY-MM-DD)
$formatted_date = $date->format('Y-m-d');

// Bind the formatted date to the prepared statement
$stmt->bind_param("sssssssiss", $username, $senha_hash, $nome, $genero, $email, $formatted_date, $morada, $telemovel, $localidade, $codigo_postal);

// Execute the prepared statement
if (!$stmt->execute()) {
    die("Error: " . $stmt->error);
}
    

$stmt->execute();
$stmt->close();
// Termina a ligação com a base de dados
$conn->close();

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>