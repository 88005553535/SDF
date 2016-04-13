<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 14:21
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$title = $_GET['title'];
$description = $_GET['description'];

$conn = getConnection();
$query = $conn->prepare(file_get_contents('../querys/find_customer_by_email.sql'));
$query->bindParam(':email',$_SESSION['user_email']);
$query->execute();
$conn->query($query);
$customerId = $query->fetch()[0];

$query = $conn->prepare(file_get_contents('../querys/add_request.sql'));
$query->bindParam(':title',$title);
$query->bindParam(':description',$description);
$query->bindParam(':customer',$customerId);
$query->execute();
$conn->query($query);