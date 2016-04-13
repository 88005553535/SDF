<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 19:09
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';
include_once "manager_menu.php";
?>

<form action="../scripts/add_task.php" method="get">
    <div class="table-caption">Нова задача</div>
    <label>Заголовок
        <input name="title" type="text">
    </label>
    <label>Опис
        <textarea name="description"></textarea>
    </label>
    <label>Статус
        <select name="status">
            <?php echo getHTMLOptionsByQuery('SELECT statuses.id, statuses.name FROM statuses')?>
        </select>
    </label>
    <label>Співробітник
        <select name="employee">
            <?php echo getHTMLOptionsByQuery('SELECT employees.id, employees.email FROM employees')?>
        </select>
    </label>
    <label>Дедлайн
        <input name="deadline" type="date">
    </label>
    <label>
    <input type="submit" value="Додати">
    </label>
</form>
