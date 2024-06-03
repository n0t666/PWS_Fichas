<div class="container mt-5">
    <h2 class="text-left top-space">Contas</h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-
striped">
                <thead>
                    <th>
                        <h3>Id</h3>
                    </th>
                    <th>
                        <h3>Número da conta</h3>
                    </th>
                    <th>
                        <h3>Titular</h3>
                    </th>
                    <th>
                        <h3>NIB</h3>
                    </th>
                    <th>
                        <h3>Email</h3>
                    </th>
                    <th>
                        <h3>Ações</h3>
                    </th>
                </thead>
                <tbody>
                    <?php foreach ($contas as $conta) { ?>
                        <tr>
                            <td><?= $conta->id ?></td>
                            <td><?= $conta->numconta ?></td>
                            <td><?= $conta->titular ?></td>
                            <td><?= $conta->nib ?></td>
                            <td><?= $conta->email ?></td>
                            <td>
                                <a href="index.php?c=conta&a=show&id=<?= $conta->id ?>" class="btn btn-info" role="button">Mostrar</a>
                                <a href="index.php?c=despesa&a=index&id=<?= $conta->id ?>" class="btn btn-info" role="button">Despesas</a>
                                <a href="index.php?c=conta&a=edit&id=<?= $conta->id ?>" class="btn btn-info" role="button">Editar</a>
                                <a href="index.php?c=conta&a=delete&id=<?= $conta->id ?>" class="btn btn-dark" role="button">Apagar</a>
                            </td>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Criar uma nova conta</h3>
            <p>
                <a href="index.php?c=conta&a=create" class="btn btn-info w-50" role="button">Nova</a>
            </p>
        </div>
    </div>
</div>