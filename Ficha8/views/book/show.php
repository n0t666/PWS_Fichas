<div class="container mt-5">
    <h2>Book details</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr class="">
                            <td>Id</td>
                            <td><?= $book->isbn ?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?= $book->name ?></td>
                        </tr>
                        <tr>
                            <td>ISBN</td>
                            <td><?= $book->isbn ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col">
                <a href=" index.php?c=book&a=index" class="btn-primary btn w-100">Voltar ao ínicio</a>
            </div>


        </div>
    </div>
</div>