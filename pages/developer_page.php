<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11.04.16
 * Time: 17:40
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

include_once 'developer_menu.php';
echo "<p id=\"welcome-text\">Вітаю Вас, <b>{$_SESSION['user_email']}</b></p>";
include_once 'active_tasks.php';

