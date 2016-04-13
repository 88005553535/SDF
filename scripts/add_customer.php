<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 12:14
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$cust_type = $_POST['customer_type'];

$conn = getConnection();
$query = $conn->prepare(file_get_contents('../querys/add_customer.sql'));
$query->bindParam(':firstname',$firstname);
$query->bindParam(':surname',$surname);
$query->bindParam(':patronymic',$patronymic);
$query->bindParam(':phone_number',$phone_number);
$query->bindParam(':email',$email);
$query->bindParam(':customer_type',$cust_type);
$query->execute();
$conn->query($query);


if ($query->errorCode()!=0){
    die("Помилка");
}

echo "<p>Замовника додано <a href='{$_SERVER['HTTP_REFERER']}'>Назад</a></p>";