<form action="" method="post">

    <?= csrf_field() ?>

    <label for="">Name</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($region['name']) ?>"><br>
    <br>

    <label for="">Slug</label><br>
    <input type="text" name="slug" value="<?= htmlspecialchars($region['slug']) ?>"><br>
    <br>

    <input type="submit" value="Save">


</form>