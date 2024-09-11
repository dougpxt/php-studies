<?php
require_once 'DatabaseRepository.php';

// Me conectar ao banco de dados

// Buscar todos os itens do banco de dados

// Exibir esses itens em alguma estrutura de HTML (Lista, Tabela, etc)
    // Fazer um loop que percorra todos os itens e exiba-os

$items = DatabaseRepository::getAllItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista - Compras</title>
</head>
<body>
<h1>Lista de Compras</h1>

<a href="add_item.php">Adicionar Novo Item</a>
<table border='1'>
    <thead>
        <tr>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Comprado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item): ?>
            <tr>
                <td><?=  $item['nome_produto'] ?></td>
                <td><?=  $item['quantidade'] ?></td>
                <td><?=  $item['comprado'] ? 'Sim' : 'Não' ?></td>
                <td>
                    <a href="#">Editar</a>
                    <a href="delete_item.php?id=<?= $item['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>