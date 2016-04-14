<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11.04.16
 * Time: 20:46
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';
$target_status = 'active';

$conn = getConnection();
$sql = $conn->prepare(file_get_contents('../querys/requests_by_status.sql'));
$sql->bindParam(':status_name', $target_status);
$sql->execute();

$requestsList = $sql->fetchAll();
echo "<table class='table'>";
echo "<caption>Невирішені запити</caption>";
echo "<th>Номер</th><th>Заголовок</th><th>Опис</th><th>Користувач</th><th>Відкриття</th><th>Закриття</th><th>Статус</th>";
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
</tr>
_EOD;
}
echo "</table>";
