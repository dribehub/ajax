<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = 'root';
$database = 'prog_web';
//$port = '3307';
//$socket = '/var/lib/mysql/mysql.sock';

$con = mysqli_connect($hostname, $username, $password, $database)
    or die("Cannot connect to $database");

$input = mysqli_real_escape_string($con, $_GET['query']);

function get_table_data($result): string
{
    $table = '';
    while ($row = mysqli_fetch_array($result)) {
        $table .= "<tr>
            <td>{$row['name']}</td>
            <td>{$row['description']}</td>
            <td>{$row['image']}</td>
        </tr>";
    }
    return $table;
}


mysqli_select_db($con, $database);
$query = <<<QUERY
    SELECT * FROM products
    WHERE name LIKE '%$input%'
    OR description LIKE '%$input%'
QUERY;
$result = mysqli_query($con, $query);
$table_data = get_table_data($result);

echo "<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    $table_data
</table>";

mysqli_close($con);