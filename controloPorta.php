<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>Estado da Porta</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">

    <h1 class="mb-4">Estado da Porta</h1>

    <h3 class="mb-3">Estado Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $valor_porta = file_get_contents("files/door/valor.txt");
            echo $valor_porta;
        ?>
    </div>

    <h3 class="mb-3">Data do Estado Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $data_porta = file_get_contents("files/door/hora.txt");
            echo $data_porta;
        ?>
    </div>

    <!-- Botões de Navegação -->
    <div>
        <a href="controloPorta_historico.php" class="btn btn-outline-primary me-2">Histórico</a>
        <a href="index.html" class="btn btn-outline-secondary">Página Inicial</a>
    </div>

    <!-- Bootstrap JS Bundle (Opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
