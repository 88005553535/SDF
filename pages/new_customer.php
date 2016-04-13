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

<form action="../scripts/add_customer.php" method="post">
    <div class="table-caption">Новий користувач</div>
    <label>Прізвище
        <input name="surname" type="text">
    </label>
    <label>Ім'я
        <input name="firstname" type="text">
    </label>
    <label>По батькові
        <input name="patronymic" type="text">
    </label>
    <label>Електронна пошта
        <input name="email" type="email">
    </label>
    <label>Номер телефону
        <input name="phone_number" type="number">
    </label>
    <label>Тип клієнта
        <select name="customer_type">
            <?php echo getHTMLOptionsByQuery('SELECT customer_type.id, customer_type.name FROM customer_type')?>
        </select>
    </label>
    <label>
        <input type="submit" value="Додати">
    </label>
</form>
