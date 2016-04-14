<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11.04.16
 * Time: 18:52
 */
?>

<div id="menu">
    <ul>
        <li>
            <a href="customer_page.php">Мій кабінет</a>
        </li>
        <li>
            <a href="new_request.php">Написати у підтримку</a>
        </li>
        <li class="right-items"><a href="../scripts/logout.php">Вихід</a></li>
    </ul>
</div>
<?php
echo "<p id=\"welcome-text\">Вітаю Вас, <b>{$_SESSION['user_email']}</b></p>";
?>