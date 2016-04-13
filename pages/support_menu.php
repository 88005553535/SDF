<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 22:14
 */
?>

<div id="menu">
    <ul>
        <li>
            <a href="support_page.php" class="current">Мій кабінет</a>
        </li>
        <li>
            <a href="new_respons.php">Відповісти</a>
        </li>
        <li class="right-items"><a href="../scripts/logout.php">Вихід</a></li>
    </ul>
</div>
<?php
echo "<p id=\"welcome-text\">Вітаю Вас, <b>{$_SESSION['user_email']}</b></p>";
?>

