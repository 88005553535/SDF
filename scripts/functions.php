<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 10.04.16
 * Time: 18:22
 */

function getConnection(){
//    $username = 'u548809910_root';
//    $password = '433848814';
//    $db_database = 'u548809910_sdf';
    if($_SERVER['HTTP_HOST'] == 'localhost'){
    $username = 'root';
    $password = '433848814';
    $db_database = 'software_developer_firm';
    }
    $dsn = "mysql:host=". $_SERVER['HTTP_HOST'].";dbname=". $db_database . ";charset=UTF8;";
//    $dsn = "mysql:host=". 'mysql.hostinger.com.ua'.";dbname=". $db_database . ";charset=UTF8;";
    $conn = NULL;
    if (!isset($conn)){
        try {
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        } catch (PDOException $e){
            die("Неудача");
        }
    }
    return $conn;
}

function getHTMLOptionsByQuery($query){
    $resultHTML = "";
    $conn = getConnection();
    $sql = $conn->prepare($query);
    $sql->execute();
    $conn->query($sql);
    $optionsList = $sql->fetchAll();
    $resultHTML .= "<option></option>";
    for($i=0;$i<count($optionsList);$i++){
        $resultHTML .= "<option value=\"{$optionsList[$i][0]}\">{$optionsList[$i][1]}</option>";
    }
    return $resultHTML;
}