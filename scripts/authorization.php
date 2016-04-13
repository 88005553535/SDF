<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 10.04.16
 * Time: 18:09
 */

require_once "header.php";
require_once 'functions.php';

if($_POST['user_email'] == NULL OR $_POST['user_password'] == NULL){
    die ('Помилка');
}
$user_email = $_POST['user_email'];
$user_password = sha1($_POST['user_password']);
$conn = getConnection();
$sql = $conn->prepare(file_get_contents('../querys/find_user.sql'));
$sql->bindParam(':email',$user_email);
$sql->bindParam(':password',$user_password);
$sql->execute();
$conn->query($sql);

if($sql->rowCount()==1){
    $_SESSION['user_email'] = $user_email;
    $_SESSION['is_logined'] = TRUE;
    $_SESSION['account_type'] = $sql->fetchAll()[0]['account_type'];
    switch($_SESSION['account_type']){
        case 1:
            header('Location: '. '/pages/manager_page.php');
            break;
        case 2:
            header('Location: '. '/pages/developer_page.php');
            break;
        case 3:
            header('Location: '. '/pages/customer_page.php');
            break;
        case 4:
            header('Location: '. '/pages/support_page.php');
            break;
    }
    echo $_SESSION['account_type'];
}
else{
    die('Помилка');
}


