<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 22:16
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';
include_once 'support_menu.php';
?>

<form action="../scripts/add_respons.php" method="get">
    <div class="table-caption">Відповідь</div>
    <label>Запит
        <select name="request">
            <?php echo getHTMLOptionsByQuery('SELECT request.id, request.title FROM request')?>
        </select>
    </label>
    <label>Відповідь
        <textarea name="respons_text"></textarea>
    </label>
    <label>
        <input type="submit" value="Відповісти">
    </label>
</form>
