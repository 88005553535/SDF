<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 22:39
 */
require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$requestId = $_GET['request'];
$respons_text = $_GET['respons_text'];
$employee = $_SESSION['user_email'];

$conn = getConnection();
$query = $conn->prepare(file_get_contents('../querys/add_respons.sql'));
$query->bindParam(':requestId',$requestId);
$query->bindParam(':respons_text',$respons_text);
$query->bindParam(':employee',$employee);
$query->execute();

if ($query->errorCode()!=0){
    //echo $conn->errorInfo();
    die("Помилка");
}

echo "<p>Відповіть відправлена<a href='{$_SERVER['HTTP_REFERER']}'>Назад</a></p>";