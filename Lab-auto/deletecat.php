<?php
include('query.php');

if (isset($_GET['id'])) {
    $C_Id = $_GET['id'];
    $query = $pdo->prepare("DELETE FROM catogary WHERE id = :CId");
    $query->bindParam(":CId", $C_Id);
    $query->execute();
    echo "<script> alert('category deleted successfully'); window.location.href = 'viewcat.php';</script>";
}
?>