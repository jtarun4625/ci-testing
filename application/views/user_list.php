<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Hello World</title>
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