<!DOCTYPE html>
<html>
<head>
    <title>My todos</title>
</head>
<body>
    <h2>List of Todos</h2>

    <ul>
        <?php foreach ($todos as $todo): ?>
            <?php echo "<li>$todo->title; </li>"; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
