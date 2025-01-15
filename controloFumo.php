<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30"> <!-- Recarrega a página a cada 30 segundos -->
    <title>Controlo de Fumo</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">

    <h1 class="mb-4">Controlo de Fumo</h1>

    <h3>Fumo Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $valor_fumo = file_get_contents("files/fumo/valor.txt");
            echo $valor_fumo . "%";
        ?>
    </div>

    <h3>Data da Fumo Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $data_fumo = file_get_contents("files/fumo/hora.txt");
            echo $data_fumo;
        ?>
    </div>

    <!-- Botões de navegação -->
    <div>
        <a href="controloFumo_historico.php" class="btn btn-outline-primary me-2">Histórico</a>
        <a href="index.html" class="btn btn-outline-secondary">Página Inicial</a>
    </div>

    <!-- Incluindo o Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
