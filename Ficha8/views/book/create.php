<div class="container">
    <form method="post" action="index.php?c=book&a=store">
        <div class="mb-3 mt-5">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?php if (isset($book)) {
                                                                                                                echo $book->name;
                                                                                                            } ?>">
            <?php
            if (isset($book->errors) && $book->errors->on('name')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $book->errors->on('name') . "</div>";
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="number" class="form-control" id="isbn" aria-describedby="isbn" name="isbn" value="<?php if (isset($book)) {
                                                                                                                echo $book->isbn;
                                                                                                            } ?>">
            <?php
            if (isset($book->errors) && $book->errors->on('isbn')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $book->errors->on('isbn') . "</div>";
            }
            ?>
        </div>
        <button type="submit" class="btn btn-primary w-100 text-uppercase">submit</button>
    </form>
</div>