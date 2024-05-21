<div class="container">
    <form method="post" action="index.php?c=chapter&a=store">
        <div class="mb-3 mt-5">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?php if (isset($chapter)) {
                                                                                                                echo $chapter->name;
                                                                                                            } ?>">
            <?php
            if (isset($chapter->errors) && $chapter->errors->on('name')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $chapter->errors->on('name') . "</div>";
            }
            ?>
            <input type="hidden" name="book_id" value="<?= $id ?>">
        </div>
        <button type="submit" class="btn btn-primary w-100 text-uppercase">submit</button>
    </form>
</div>