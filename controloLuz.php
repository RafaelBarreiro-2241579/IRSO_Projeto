<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>Estado da Luz</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">

    <h1 class="mb-4">Estado da Luz</h1>

    <h3>Estado Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $valor_luz = file_get_contents("files/luz/valor.txt");
            echo $valor_luz;
        ?>
    </div>

    <h3>Data do Estado Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $data_luz = file_get_contents("files/luz/hora.txt");
            echo $data_luz;
        ?>
    </div>

    <!-- Botões de Navegação -->
    <div>
        <a href="controloLuz_historico.php" class="btn btn-outline-primary me-2">Histórico</a>
        <a href="index.html" class="btn btn-outline-secondary">Página Inicial</a>
    </div>

    <!-- Incluindo o Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
