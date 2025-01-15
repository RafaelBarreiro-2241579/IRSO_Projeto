<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>Estado da Temperatura</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">

    <h1 class="mb-4">Estado da Temperatura</h1>

    <h3 class="mb-3">Temperatura Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $valor_temperatura = file_get_contents("files/temperatura/valor.txt");
            echo $valor_temperatura . "ºC";
        ?>
    </div>

    <h3 class="mb-3">Data da Temperatura Atual</h3>
    <div class="border p-3 mb-4">
        <?php
            $data_temperatura = file_get_contents("files/temperatura/hora.txt");
            echo $data_temperatura;
        ?>
    </div>

    <!-- Botões de Navegação -->
    <div>
        <a href="controloTemperatura_historico.php" class="btn btn-outline-primary me-2">Histórico</a>
        <a href="index.html" class="btn btn-outline-secondary">Página Inicial</a>
    </div>

    <!-- Bootstrap JS Bundle (Opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
