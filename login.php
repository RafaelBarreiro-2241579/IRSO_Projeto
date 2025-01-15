<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <link href="assets/img/Logo.png" rel="icon">
    <title>Login</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 15px;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-form h2 {
            text-align: center;
        }
        .login-form .btn {
            width: 100%;
        }
        .message {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <?php 
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verificação simples de credenciais (substituir por lógica real de autenticação)
        if ($username === 'projeto' && $password === '12345') {
            $message = "<div class='alert alert-success'>Login bem-sucedido!</div>";
            header('Location: index.html');
        } else {
            $message = "<div class='alert alert-danger'>Usuário ou senha inválidos!</div>";
        }
    }
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2 class="mb-4">Login</h2>
                    <!-- Exibindo mensagem de sucesso ou erro -->
                    <div class="message">
                        <?php echo $message; ?>
                    </div>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="username" class="form-label">Utilizador:</label>
                            <input type="text" id="username" name="username" class="form-control" required aria-label="Utilizador">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha:</label>
                            <input type="password" id="password" name="password" class="form-control" required aria-label="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluindo o Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
