<!DOCTYPE html>
<html>
<head>
	<title>Página de Administração</title>
</head>
<body>
	<h1>Pesquisar Usuários</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Nome:</label>
		<input type="text" name="nome" /><br />

		<label>E-mail:</label>
		<input type="email" name="email" /><br />

		<label>Localidade:</label>
		<input type="text" name="localidade" /><br />

		<label>Código Postal:</label>
		<input type="text" name="codigo_postal" /><br />

		<label>Gênero:</label>
		<select name="genero">
			<option value=""></option>
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
            <option value="O">Outro</option>
		</select><br />

		<label>Faixa Etária:</label>
		<input type="text" name="faixa_etaria" /><br />

		<input type="submit" value="Pesquisar" />
</form>

<h1>Usuários Encontrados</h1>
<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Localidade</th>
			<th>Código Postal</th>
			<th>Gênero</th>
			<th>Faixa Etária</th>
		</tr>
	</thead>
	<tbody>

    <?php

            //ini_set('display_errors', 1);
            //ini_set('display_startup_errors', 1);
            //error_reporting(E_ALL);

			include "abreconexao.php";

			// Monta a consulta SQL com base nos critérios de pesquisa
			$sql = "SELECT * FROM utilizador WHERE 1=1 ";

			if (!empty($_POST["nome"])) {
				$sql .= "AND nome LIKE '%" . $_POST["nome"] . "%' ";
			}

			if (!empty($_POST["email"])) {
				$sql .= "AND email LIKE '%" . $_POST["email"] . "%' ";
			}

			if (!empty($_POST["localidade"])) {
				$sql .= "AND localidade LIKE '%" . $_POST["localidade"] . "%' ";
			}

			if (!empty($_POST["codigo_postal"])) {
				$sql .= "AND cod_postal = " . $_POST["codigo_postal"] . " ";
			}

			if (!empty($_POST["genero"])) {
				$sql .= "AND genero = '" . $_POST["genero"] . "' ";
			}

			if (!empty($_POST["faixa_etaria"])) {
				$sql .= "AND YEAR(NOW()) - YEAR(data_nascimento) BETWEEN " . $_POST["faixa_etaria"] . " ";
			}

			// Executa a consulta
			$resultado = $conn->query($sql);

			// Verifica se a consulta retornou algum resultado
			if ($resultado->num_rows > 0) {
			    // Exibe os dados dos usuários encontrados
			    while($row = $resultado->fetch_assoc()) {
			        echo "<tr>";
			        echo "<td>" . $row["nome"] . "</td>";
			        echo "<td>" . $row["email"] . "</td>";
			        echo "<td>" . $row["localidade"] . "</td>";
			        echo "<td>" . $row["cod_postal"] . "</td>";
			        echo "<td>" . ($row["genero"] == "M" ? "Masculino" : "Feminino") . "</td>";
			        echo "<td>" . (date("Y") - date("Y", strtotime($row["data_nascimento"]))) . "</td>";
			        echo "</tr>";
			    }
			} else {
			    // Caso contrário, exibe uma mensagem informando que não foram encontrados usuários
			    echo "<tr><td colspan='6'>Nenhum usuário encontrado.</td></tr>";
			}

			// Fecha a conexão com o banco de dados
			$conn->close();
		?>
	</tbody>
</table>
</body>
</html>