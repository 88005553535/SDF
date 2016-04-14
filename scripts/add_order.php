<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 12:49
 */
require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$customer = $_POST['customer'];
$project_name = $_POST['project_name'];
$specifications = $_POST['specifications'];
$date_opened = $_POST['date_opened'];
$price = $_POST['price'];
$deadline = $_POST['deadline'];


$conn = getConnection();
$query = $conn->prepare(file_get_contents('../querys/add_order.sql'));
$query->bindParam(':customer',$customer);
$query->bindParam(':project_name',$project_name);
$query->bindParam(':specifications',$specifications);
$query->bindParam(':date_opened',$date_opened);
$query->bindParam(':price',$price);
$query->bindParam(':deadline',$deadline);
$query->execute();

if ($query->errorCode()!=0){
    die("Помилка");
}

echo "<p>Замовника додано <a href='{$_SERVER['HTTP_REFERER']}'>Назад</a></p>";

