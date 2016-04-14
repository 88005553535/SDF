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

$orderList = $sql->fetchAll();
echo "<table class='table'>";
echo "<caption>Активні замовлення</caption>";
echo "<th>Номер</th><th>Замовник</th><th>Проект</th><th>Специфікація</th><th>Відкриття</th><th>Закриття</th><th>Ціна</th><th>Дедлайн</th><th>Статус</th>";
for ($i=0; $i<count($orderList); $i++) {
    echo <<<_EOD
    <tr>
<td> {$orderList[$i][0]}</td>
<td> {$orderList[$i][1]}</td>
<td> {$orderList[$i][2]}</td>
<td> {$orderList[$i][3]}</td>
<td> {$orderList[$i][4]}</td>
<td> {$orderList[$i][5]}</td>
<td> {$orderList[$i][6]}</td>
<td> {$orderList[$i][7]}</td>
<td> {$orderList[$i][8]}</td>
</tr>
_EOD;
    echo "</table>";
}