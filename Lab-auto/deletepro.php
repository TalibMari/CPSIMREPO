<?php
include('query.php');

if (isset($_GET['id'])) {
    $C_Id = $_GET['id'];
    $query = $pdo->prepare("DELETE FROM products WHERE id = :CId");
    $query->bindParam(":CId", $C_Id);
    $query->execute();
    echo "<script> alert('product deleted successfully'); window.location.href = 'viewpro.php';</script>";
}
?>