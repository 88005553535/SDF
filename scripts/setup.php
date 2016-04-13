<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 13.04.16
 * Time: 20:06
 */
require_once 'functions.php';


if($_GET['setup'] == TRUE){
    $conn = getConnection();
    $creadeDB = $conn->prepare(file_get_contents('../querys/createDB.sql'));
    $creadeDB->execute();
    $conn->query($creadeDB);
    $fillingDB = $conn->prepare(file_get_contents('../querys/fillingDB.sql'));
    $fillingDB->execute();
    $conn->query($fillingDB);
}