<div class="container mt-5">
    <h2>Chapter details</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr class="">
                            <td>Id</td>
                            <td><?= $chapter->id ?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?= $chapter->name ?></td>
                        </tr>
                        <tr>
                            <td>Book Name</td>
                            <td><?= $chapter->book->name ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col">
                <a href=" index.php?c=chapter&a=index&id=<?= $chapter->id ?>" class="btn-primary btn w-100">Voltar ao ínicio</a>
            </div>


        </div>
    </div>
</div>