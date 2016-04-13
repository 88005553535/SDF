<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.04.16
 * Time: 16:49
 */

require_once "../scripts/header.php";
require_once '../scripts/functions.php';

$conn = getConnection();
$sql = $conn->prepare(file_get_contents('../querys/find_tasks_by_email.sql'));
$sql->bindParam(':email', $_SESSION['user_email']);
$sql->execute();
$conn->query($sql);
$taskList = $sql->fetchAll();

echo "<table class='table'>";
echo "<caption>Мої завдання</caption>";
echo "<th>Номер</th><th>Заголовок</th><th>Опис</th><th>Статус</th><th>Співробітник</th><th>Відкриття</th><th>Закриття</th><th>Дедлайн</th>";
for ($i=0; $i<count($taskList); $i++) {
    echo <<<_EOD
    <tr>
<td> {$taskList[$i][0]}</td>
<td> {$taskList[$i][1]}</td>
<td> {$taskList[$i][2]}</td>
<td> {$taskList[$i][3]}</td>
<td> {$taskList[$i][4]}</td>
<td> {$taskList[$i][5]}</td>
<td> {$taskList[$i][6]}</td>
<td> {$taskList[$i][7]}</td>
</tr>
_EOD;
    echo "</table>";
}