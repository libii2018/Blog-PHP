
<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>
    <title><?= App::getInstance()->title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column h-100">
   
    
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Fixed navbar</a>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main >
        <div class="container">
            <div style="padding-top: 100px;">
                <?= $content; ?>
            </div>
            
        </div>
    </main>


    </body >
</html>
