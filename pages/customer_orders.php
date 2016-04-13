<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11.04.16
 * Time: 20:35
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$conn = getConnection();
$sql = $conn->prepare(file_get_contents('../querys/customer_orders.sql'));
$sql->bindParam(':email', $_SESSION['user_email']);
$sql->execute();
$conn->query($sql);

$orderList = $sql->fetchAll();

echo "<table class='table'>";
echo "<caption>Мої замовлення</caption>";
echo "<th>Номер</th><th>Проект</th><th>Специфікація</th><th>Відкриття</th><th>Закриття</th><th>Ціна</th><th>Дедлайн</th><th>Статус</th>";
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
</tr>
_EOD;
}
    echo "</table>";
