<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11.04.16
 * Time: 20:28
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

include_once 'customer_menu.php';
?>

<form action="../scripts/send_request.php" method="get">
    <div class="table-caption">Запитання</div>
    <label>Тема
        <input name="title" type="text">
    </label>
    <label>Опис
        <textarea name="description"></textarea>
    </label>
    <label>
        <input type="submit" value="Відправити">
    </label>
</form>
