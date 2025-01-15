<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Luz</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">

    <h2 class="mb-4">Histórico de Luz</h2>
    <h3 class="mb-3">Estado (Data de atualização)</h3>

    <div class="border p-3 mb-4">
        <?php
            $historico_luz = nl2br(file_get_contents("files/luz/log.txt"));
            echo $historico_luz;
        ?>
    </div>

    <!-- Botão para voltar à página inicial -->
    <div>
        <a href="index.html" class="btn btn-outline-secondary">Página Inicial</a>
    </div>

    <!-- Incluindo o Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
