<?php

function connect(){
    try{
        $pdo = new PDO('mysql: host=localhost; dbname=lista_compras', 'root', '');

        return $pdo;
    } catch(PDOException $e){
        echo 'connection failed: ' . $e->getMessage();
        exit;
    }
    
}

function getAllItems(){
    $pdo = connect();
    $sql = "SELECT * FROM itens_compra";
    $stmt = $pdo->query($sql); // stmt é junção de conexao com query
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addItem($nome_produto, $quantidade){
    $pdo = connect();
    $sql = "INSERT INTO itens_compra (nome_produto, quantidade)
            VALUES (:nome_produto, :quantidade)";
    
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['nome_produto' => $nome_produto, 
                            'quantidade' => $quantidade]);
}

function updateItem($id, $comprado){

}

function deleteItem($id){
    $pdo = connect();
    $sql = "DELETE FROM itens_compra
            WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['id' => $id]);

}
?>