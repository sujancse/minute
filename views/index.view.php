<?php require 'partials/header.php'; ?>
<h2>List of Todos</h2>

<ul>
    <?php foreach ($todos as $todo): ?>
        <?php echo "<li>$todo->title; </li>"; ?>
    <?php endforeach; ?>
</ul>

<h2>Lists of Names</h2>
<ul>
    <?php foreach ($users as $user): ?>
        <?php echo "<li>$user->name</li>"; ?>
    <?php endforeach; ?>
</ul>

<br>

<h2>Add Name</h2>

<form action="/add-name" method="POST" accept-charset="utf-8">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="Submit" name="" class="btn btn-primary">
    </div>
</form>

<?php require 'partials/footer.php'; ?>
