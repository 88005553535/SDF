<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 22:51
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$email = $_POST['email'];
$customer = $_POST['customer'];
$password = sha1($_POST['password']);
$employee = $_POST['employee'];
$account_type = $_POST['account_type'];

$conn = getConnection();
$query = $conn->prepare(file_get_contents('../querys/add_user.sql'));
$query->bindParam(':email',$email);
$query->bindParam(':customer',$customer);
$query->bindParam(':password',$password);
$query->bindParam(':employee',$employee);
$query->bindParam(':account_type',$account_type);
$query->execute();

if ($query->errorCode()!=0){
    die("Помилка");
}

echo "<p>Користувача додано <a href='{$_SERVER['HTTP_REFERER']}'>Назад</a></p>";