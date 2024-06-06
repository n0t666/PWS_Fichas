<div class="container mt-5">
    <h2 class="text-left top-space">Despesa Index</h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <h1><?= $conta->numconta ?></h1>
            <h3><?= $conta->titular ?></h3>
            <h3><?= $conta->nib ?></h3>
            <h3><?= $conta->email ?></h3>
            <table class="table table-
striped">
                <thead>
                    <th>
                        <h3>Id</h3>
                    </th>
                    <th>
                        <h3>Data</h3>
                    </th>
                    <th>
                        <h3>Valor</h3>
                    </th>
                    <th>
                        <h3>Descrição</h3>
                    </th>
                    <th>
                        <h3>Pagamento</h3>
                    </th>
                    <th>
                        <h3>Categoria</h3>
                    </th>
                    <th>
                        <h3>User Actions</h3>
                    </th>
                </thead>
                <tbody>
                    <?php foreach ($conta->despesas as $despesa) { ?>
                        <tr>
                            <td><?= $despesa->id ?></td>
                            <td><?= date_format($despesa->date, 'Y-m-d H:i:s'); ?></td>
                            <td><?= $despesa->valor ?></td>
                            <td><?= $despesa->descricao ?></td>
                            <td><?= $despesa->metodopagamento->nome ?></td>
                            <td><?= $despesa->categoria->nome ?></td>
                            <td>
                                <a href="index.php?c=despesa&a=show&id=<?= $despesa->id ?>" class="btn btn-info" role="button">Show</a>
                                <a href="index.php?c=despesa&a=edit&id=<?= $despesa->id ?>" class="btn btn-info" role="button">Edit</a>
                                <a href="index.php?c=despesa&a=delete&id=<?= $despesa->id ?>" class="btn btn-warning" role="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Create a new despesa</h3>
            <p>
                <a href="index.php?c=despesa&a=create&id=<?= $conta->id ?>" class="btn btn-info w-50" role="button">New</a>
            </p>
        </div>
    </div>
</div>