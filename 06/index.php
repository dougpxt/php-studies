<?php
// link API
$URL = "http://tit0676503w10-1/aecio/server/mock_data.php"

// saída dados
$dados = file_get_contents($URL);

// conversão
$dados_do_sensor = json_decode($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historico de Temperaturas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tempo</th>
                <th>Temperatura</th>
                <th>Humidade (%)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados_do_sensor as $entrada): ?>
                <tr>
                    <td><?php echo $entrada['timestamp'] ?></td>
                    <td><?php echo $entrada['temperature'] ?></td>
                    <td><?php echo $entrada['humidity'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>