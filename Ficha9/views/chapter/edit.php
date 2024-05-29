<div class="container">
    <form method="post" action="index.php?c=chapter&a=update&id=<?= $chapter->id ?>">
        <div class="mb-3 mt-5">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?= $chapter->name  ?>">
            <?php
            if (isset($chapter->errors) && $chapter->errors->on('name')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $chapter->errors->on('name') . "</div>";
            }
            ?>
        </div>
        <button type="submit" class="btn btn-primary w-100 text-uppercase">editar</button>
    </form>
    <a class="btn btn-primary w-100 text-uppercase mt-2" href="index.php?c=chapter&a=index&id=<?= $chapter->id ?>">voltar atrás</a>
</div>