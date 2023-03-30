<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Fcul 2HandCloth</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-2 mr-1">2</span>HandCloth</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="preferencias.php" class="btn border">
                    <i class="fas fa-user text-primary"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-4 bg-white m-3">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h1>Preferências de Roupas</h1>
                    <label for="cor">Cor:</label>
                    <select id="cor" name="cor" required>
                        <option value="">Selecione</option>
                        <option value=1>Preto</option>
                        <option value=2>Branco</option>
                        <option value=3>Vermelho</option>
                        <option value=4>Verde</option>
                        <option value=5>Azul</option>
                    </select><br><br>
                    <label for="tamanho">Tamanho:</label>
                    <select id="tamanho" name="tamanho" required>
                        <option value="">Selecione</option>
                        <option value=1>XS</option>
                        <option value=2>S</option>
                        <option value=3>M</option>
                        <option value=4>L</option>
                        <option value=5>XL</option>
                    </select><br><br>
                    <label for="tipo">Tipo:</label>
                    <select id="tipo" name="tipo" required>
                        <option value="">Selecione</option>
                        <option value=1>Camisa</option>
                        <option value=2>T-shirt</option>
                        <option value=3>Calças</option>
                        <option value=4>Hoodie</option>
                        <option value=5>Saia</option>
                        <option value=6>Vestido</option>
                    </select><br><br>
                    <label for="categoria">Categoria:</label>
                    <select id="categoria" name="categoria" required>
                        <option value="">Selecione</option>
                        <option value=1>Homem</option>
                        <option value=2>Mulher</option>
                        <option value=3>Criança</option>
                    </select><br><br>
                    <label for="marca">Marca:</label>
                    <select id="marca" name="marca" required>
                        <option value="">Selecione</option>
                        <option value=1>Nike</option>
                        <option value=2>Adidas</option>
                        <option value=3>Puma</option>
                        <option value=4>Zara</option>
                        <option value=5>Mango</option>
                    </select><br><br>
                    <label for="estado">Estado:</label>
                    <select id="estado" name="estado" required>
                        <option value="">Selecione</option>
                        <option value=1>Novo</option>
                        <option value=2>Semi-novo</option>
                        <option value=3>Usado</option>
                        <option value=4>Muito Usado</option>
                    </select><br><br>
                    <input type="submit" value="Salvar Preferências" />
                </form>   
                </div>
                <div class="col-lg-4 bg-white m-3">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" id="username" name="username" /><br><br>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" id="nome" name="nome"  pattern="[A-Za-z ]+" title="Digite somente letras." /><br><br>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                            <input type="text" id="morada" name="morada" /><br><br>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                            <input type="text" id="localidade" name="localidade" /><br><br>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                            <input type="text" id="codigo_postal" name="codigo_postal" pattern="\d{4}-\d{3}" title="O código postal deve estar no formato XXXX-XXX"/><br><br>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            <input type="tel" id="telemovel" name="telemovel"  pattern="\d{9}" title="O telemóvel deve ter 9 numeros"/><br><br>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" id="email" name="email" /><br><br>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" id="senha" name="senha" minlength="8" /><br><br>
                        </div>
                        <input type="submit" value="Atualizar" />            
                    </form>        
                </div>
            </div>
        </div>
    <!-- Topbar End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. 
					
					<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
					Designed by <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "abreconexao.php";

$utilizador_def = "my_default_user";

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

  $utilizador_def = "my_default_user";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve the form data
    $cor = $_POST["cor"];
    $tamanho = $_POST["tamanho"];
    $tipo = $_POST["tipo"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];
    $estado = $_POST["estado"];
    
    // print out the user's preferences
    echo "As suas preferências de roupas são:<br>";
    echo "Cor: " . $cor . "<br>";
    echo "Tamanho: " . $tamanho . "<br>";
    echo "Tipo: " . $tipo . "<br>";
    echo "Categoria: " . $categoria . "<br>";
    echo "Marca: " . $marca . "<br>";
    echo "Estado: " . $estado . "<br>";
    
    // check if the user already has preferences stored in the database
    $sql = "SELECT COUNT(*) FROM cor_preferencias WHERE utilizador = '$utilizador_def';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $count = $row[0];
    
    // execute the appropriate SQL query based on whether the user has preferences already stored or not
    if ($count == 0) {
        $sql_insert = "INSERT INTO cor_preferencias (cor, utilizador) VALUES ('$cor', '$utilizador_def');
            INSERT INTO tamanho_preferencias (tamanho, utilizador) VALUES ('$tamanho', '$utilizador_def');
            INSERT INTO tipo_preferencias (tipo, utilizador) VALUES ('$tipo', '$utilizador_def');
            INSERT INTO categoria_preferencias (categoria, utilizador) VALUES ('$categoria', '$utilizador_def');
            INSERT INTO marca_preferencias (marca, utilizador) VALUES ('$marca', '$utilizador_def');
            INSERT INTO estado_preferencias (estado, utilizador) VALUES ('$estado', '$utilizador_def');";
        mysqli_multi_query($conn, $sql_insert);
    } else {
        $sql_update = "UPDATE cor_preferencias SET cor = '$cor' WHERE utilizador = '$utilizador_def';
            UPDATE tamanho_preferencias SET tamanho = '$tamanho' WHERE utilizador = '$utilizador_def';
            UPDATE tipo_preferencias SET tipo = '$tipo' WHERE utilizador = '$utilizador_def';
            UPDATE categoria_preferencias SET categoria = '$categoria' WHERE utilizador = '$utilizador_def';
            UPDATE marca_preferencias SET marca = '$marca' WHERE utilizador = '$utilizador_def';
            UPDATE estado_preferencias SET estado = '$estado' WHERE utilizador = '$utilizador_def';";
        mysqli_multi_query($conn, $sql_update);
    }
}

$conn->close();

?>
    
    
    
    
    
