<div class="container">
    <form method="POST" action="index.php?c=conta&a=store">
        <div class="row mb-3">
            <label for="inputNumConta" class="col-sm-2 col-form-label">Número da conta:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputNumConta" name="numconta" value="<?php if (isset($conta)) {
                                                                                                        echo $conta->numconta;
                                                                                                    } ?>">
            </div>
            <?php
            if (isset($conta->errors) && $conta->errors->on('numconta')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $conta->errors->on('numconta') . "</div>";
            }
            ?>
        </div>
        <div class="row mb-3">
            <label for="inputTitulo" class="col-sm-2 col-form-label">Título:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitulo" name="titulo" value="<?php if (isset($conta)) {
                                                                                                    echo $conta->titulo;
                                                                                                } ?>">
            </div>
            <?php
            if (isset($conta->errors) && $conta->errors->on('titulo')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $conta->errors->on('titulo') . "</div>";
            }
            ?>
        </div>
        <div class="row mb-3">
            <label for="inputNib" class="col-sm-2 col-form-label">nib:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputNib" name="nib" value="<?php if (isset($conta)) {
                                                                                                echo $conta->nib;
                                                                                            } ?>">
            </div>
            <?php
            if (isset($conta->errors) && $conta->errors->on('nib')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $conta->errors->on('nib') . "</div>";
            }
            ?>
        </div>

        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email" value="<?php if (isset($conta)) {
                                                                                                    echo $conta->email;
                                                                                                } ?>">
            </div>
            <?php
            if (isset($conta->errors) && $conta->errors->on('email')) {
                echo "<div class='alert alert-danger mt-2' role='alert'>" . $conta->errors->on('email') . "</div>";
            }
            ?>
        </div>
        <div class="d-flex  justify-content-center">
            <button type="submit" class="btn btn-primary w-50">Criar</button>
        </div>
    </form>
</div>