<!-- views/layout/default.php -->
<!DOCTYPE html>
<html>

<head>
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?c=auth&a=index">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php require_once($viewPath); ?>

    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>

</html>