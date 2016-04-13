<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 10.04.16
 * Time: 18:23
 */
session_start();
echo "<title>{$_SESSION['user_email']}</title>";
echo "<meta charset=\"utf-8\">";
echo '<link href="../style/style.css" rel="stylesheet" type="text/css">';