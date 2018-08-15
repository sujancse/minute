<?php require 'partials/header.php'; ?>
<h2>List of Todos</h2>

<ul>
    <?php foreach ($todos as $todo): ?>
        <?php echo "<li>$todo->title; </li>"; ?>
    <?php endforeach; ?>
</ul>
<?php require 'partials/footer.php'; ?>
