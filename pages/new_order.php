<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11.04.16
 * Time: 20:22
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

include_once "manager_menu.php";
?>

<form action="../scripts/add_order.php" method="post">
    <div class="table-caption">Нове замовлення</div>
    <label>Замовник
    <select name="customer">
        <?php echo getHTMLOptionsByQuery('SELECT customer.id, customer.email FROM customer')?>
    </select>
    </label>
    <label>Проект
        <input name="project_name" type="text">
    </label>
    <label>Специфікація
        <input name="specifications" type="text">
    </label>
    <label>Дата відкриття
        <input name="date_opened" type="date">
    </label>
    <label>Ціна
        <input name="price" type="float">
    </label>
    <label>Дедлайн
        <input name="deadline" type="date">
    </label>
    <label>
    <input type="submit" value="Додати">
    </label>
</form>
