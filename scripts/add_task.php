<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 19:16
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$title = $_GET['title'];
$description = $_GET['description'];
$status = $_GET['status'];
$employee = $_GET['employee'];
$deadline = $_GET['deadline'];

$conn = getConnection();
$query = $conn->prepare(file_get_contents('../querys/add_task.sql'));
$query->bindParam(':title',$title);
$query->bindParam(':description',$description);
$query->bindParam(':status',$status);
$query->bindParam(':employee',$employee);
$query->bindParam(':deadline',$deadline);
$query->execute();
$conn->query($query);

if ($query->errorCode()!=0){
    die("Помилка");
}

echo "<p>Завдання додано <a href='{$_SERVER['HTTP_REFERER']}'>Назад</a></p>";