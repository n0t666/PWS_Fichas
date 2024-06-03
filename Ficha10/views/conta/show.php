<div class="container mt-5">
    <h2>Detalhes da conta</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr class="">
                            <td>Id</td>
                            <td><?= $conta->id ?></td>
                        </tr>
                        <tr>
                            <td>Numéro de conta</td>
                            <td><?= $conta->numconta ?></td>
                        </tr>
                        <tr>
                            <td>Titular</td>
                            <td><?= $conta->titular ?></td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td><?= $conta->nib ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $conta->email ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col">
                <a href=" index.php?c=conta&a=index" class="btn-primary btn w-100">Voltar ao ínicio</a>
            </div>


        </div>
    </div>
</div>