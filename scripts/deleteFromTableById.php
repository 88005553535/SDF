<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 14.04.16
 * Time: 18:14
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$table = $_GET['table'];
$id = $_GET['id'];

$conn = getConnection();
$query = $conn->prepare("DELETE FROM {$table} WHERE id = :id");
$query->bindParam(':id',$id);
$query->execute();
echo $query->rowCount();

if ($query->errorCode()!=0){
    die("Помилка: ". print_r($query->errorInfo()));
}

echo "<p>Видалено<a href='{$_SERVER['HTTP_REFERER']}'>Назад</a></p>";