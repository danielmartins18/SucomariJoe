<?php
 
include('conexao.php');
 
$stmt = $conn->prepare("SELECT * FROM produtos LIMIT 3");
 
$stmt->execute();
 
$buscar_produtos = $stmt->get_result();//[]
 
?>