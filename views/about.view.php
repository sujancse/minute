<?php require 'partials/header.php'; ?>
    <h2>About Us</h2>
    <form action="/posts" method="POST" accept-charset="utf-8">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" name="" class="btn btn-primary">
        </div>
    </form>
<?php require 'partials/footer.php'; ?>
