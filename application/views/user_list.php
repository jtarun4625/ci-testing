<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
<?php foreach ($users as $user): ?>
    <table>
        <tr>
            <td>
                <?= $user["firstname"] ?>
            </td>
            <td>
                <?= $user["lastname"] ?>
            </td>
        </tr>
    </table>
<?php endforeach; ?>
</body>
</html>