<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11.04.16
 * Time: 20:46
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';
$target_status = 1;

$conn = getConnection();
$sql = $conn->prepare(file_get_contents('../querys/orders_by_status.sql'));
$sql->bindParam(':orders_status', $target_status);
$sql->execute();

$requestsList = $sql->fetchAll();
echo "<table class='table'>";
echo "<caption>Активні замовлення</caption>";
echo "<th>Номер</th><th>Замовник</th><th>Проект</th><th>Специфікація</th><th>Відкриття</th><th>Закриття</th><th>Ціна</th><th>Дедлайн</th><th>Статус</th><th colspan='2'>Действия</th>";
for ($i=0; $i<count($requestsList); $i++) {
    echo <<<_EOD
    <tr>
<td> {$requestsList[$i][0]}</td>
<td> {$requestsList[$i][1]}</td>
<td> {$requestsList[$i][2]}</td>
<td> {$requestsList[$i][3]}</td>
<td> {$requestsList[$i][4]}</td>
<td> {$requestsList[$i][5]}</td>
<td> {$requestsList[$i][6]}</td>
<td> {$requestsList[$i][7]}</td>
<td> {$requestsList[$i][8]}</td>
<td><a href="../scripts/deleteFromTableById.php?id={$requestsList[$i][0]}&table=orders">Удалить</a></td>
</tr>
_EOD;
}
echo "</table>";
