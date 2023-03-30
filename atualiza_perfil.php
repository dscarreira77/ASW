<!DOCTYPE html>
<html>
<head>
    <title>Formulário de cadastro de usuário</title>
</head>
<body>
    <h1>Formulário de cadastro de usuário</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"  pattern="[A-Za-z ]+" title="Digite somente letras." /><br><br>
        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" id="data_nasc" name="data_nasc"/><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" /><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" minlength="8"  /><br><br>
        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" >
            <option value="">Selecione</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
        </select><br><br>
        <label for="morada">Morada:</label>
        <input type="text" id="morada" name="morada"  /><br><br>
        <label for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal"  pattern="\d{4}-\d{3}" title="O código postal deve estar no formato XXXX-XXX"/><br><br>
        <label for="localidade">Localidade:</label>
        <input type="text" id="localidade" name="localidade"  /><br><br>
        <label for="telemovel">Telemóvel:</label>
        <input type="tel" id="telemovel" name="telemovel"  pattern="\d{9}" title="O telemóvel deve ter 9 numeros"/><br><br>
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="username" /><br><br>
        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "abreconexao.php";

$utilizador_def = "my_default_user";

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data and sanitize inputs
  $nome = htmlspecialchars($_POST["nome"]);
  $data_nasc = $_POST["data_nasc"];
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
  $genero = $_POST["genero"];
  $morada = htmlspecialchars($_POST["morada"]);
  $codigo_postal = $_POST["codigo_postal"];
  $localidade = htmlspecialchars($_POST["localidade"]);
  $telemovel = $_POST["telemovel"];
  $username = htmlspecialchars($_POST["username"]);

    // Update user profile in database
    $sql = "UPDATE utilizador SET ";

    if (!empty($nome)) {
    $sql .= "nome='$nome', ";
    }
    if (!empty($data_nasc)) {
    $sql .= "data_nascimento='$data_nasc', ";
    }
    if (!empty($email)) {
    $sql .= "email='$email', ";
    }
    if (!empty($_POST["senha"])) {
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $sql .= "senha='$senha', ";
    }
    if (!empty($genero)) {
    $sql .= "genero='$genero', ";
    }
    if (!empty($morada)) {
    $sql .= "morada='$morada', ";
    }
    if (!empty($codigo_postal)) {
    $sql .= "cod_postal='$codigo_postal', ";
    }
    if (!empty($localidade)) {
    $sql .= "localidade='$localidade', ";
    }
    if (!empty($telemovel)) {
    $sql .= "telemovel='$telemovel', ";
    }
    if (!empty($username)) {
    $sql .= "username='$username', ";
    }

    // Remove trailing comma and space
    $sql = rtrim($sql, ", ");

    $sql .= " WHERE username='$utilizador_def'";

    if ($conn->query($sql) === TRUE) {
    echo "Perfil atualizado com sucesso";
    }
}
?>