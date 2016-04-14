<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 22:50
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';
include_once "manager_menu.php";
?>

<form action="../scripts/add_user.php" method="post">
    <div class="table-caption">Новий користувач</div>
    <label>Електронна пошта
        <input name="email" type="email">
    </label>
    <label>Замовник
        <select name="customer">
            <?php echo getHTMLOptionsByQuery('SELECT customer.id, customer.email FROM customer')?>
        </select>
    </label>
    <label>Співробітник
        <select name="employee">
            <?php echo getHTMLOptionsByQuery('SELECT employees.id, employees.email FROM employees')?>
        </select>
    </label>
    <label>Пароль
        <input name="password" type="password">
    </label>
    <label>Тип аккаунту
        <select name="account_type">
            <?php echo getHTMLOptionsByQuery('SELECT account_types.id, account_types.name FROM account_types')?>
        </select>
    </label>
    <label>
        <input type="submit" value="Додати">
    </label>
</form>
