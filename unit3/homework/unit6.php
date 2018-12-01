<?php
/**
 * 6.
 * В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
 * Необходимо представить пункты меню как элементы массива и вывести их циклом.
 * Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
 */

$menu = [
    [
        'name' => 'Home',
        'href' => '/',
        'attrs' => [
            'isActive' => true,
        ],
        'children' => [],
    ],
    [
        'name' => 'Link',
        'href' => '/link',
        'children' => [],
    ],
    [
        'name' => 'Disabled',
        'href' => '',
        'attrs' => [
            'disabled' => true,
        ],
        'children' => [],
    ],
    [
        'name' => 'Dropdown',
        'children' => [
            [
                'name' => 'Action',
                'href' => '/action',
                'children' => [],
            ],
            [
                'name' => 'Other action',
                'href' => '/other-action',
                'children' => [],
            ],
        ],
    ],

];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/navbars/navbar.css" rel="stylesheet">
</head>

<body>


<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <?php
                foreach ($menu as $i => $menuItem) {
                    $attrs = [];
                    if (array_key_exists('attrs', $menuItem)) {
                        $attrs = $menuItem['attrs'];
                    }
                    $isActive = false;
                    if (isset($attrs['isActive'])) {
                        $isActive = true;
                    }
                    $disabled = false;
                    if (isset($attrs['disabled'])) {
                        $disabled = true;
                    }
                    $children = [];
                    if (isset($menuItem['children'])) {
                        $children = $menuItem['children'];
                    }
                    ?>
                    <li class="nav-item <?php if ($isActive) { echo 'active'; } ?> <?php if ($children) { echo 'dropdown'; } ?>">
                        <a
                                class="nav-link  <?php if ($disabled) { echo 'disabled'; } ?> <?php if ($children) { echo 'dropdown-toggle'; } ?>"
                                href="<?= $menuItem['href'] ?? ''; ?>"
                                <?php if ($children) { echo 'id="dropdown'.$i.'" data-toggle="dropdown"';} ?>
                        >
                            <?= $menuItem['name']; ?>
                            <?php if ($isActive) {
                                echo '<span class="sr-only">(current)</span>';
                            } ?>
                        </a>
                        <?php if ($children): ?>
                            <div class="dropdown-menu" aria-labelledby="dropdown<?= $i ?>">
                                <?php foreach ($children as $child) : ?>

                                    <a class="dropdown-item" href="<?= $child['href'] ?>"><?= $child['name'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif ?>
                    </li>
                <?php } ?>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>

    <main role="main">
        <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
                <h1>Navbar examples</h1>
                <p>
                    <a class="btn btn-primary" href="/" role="button">View navbar docs &raquo;</a>
                </p>
            </div>
        </div>
    </main>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>

