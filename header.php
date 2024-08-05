<!DOCTYPE html>
</lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container ">
                <a class="navbar-brand" href="<?= get_home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/tarvos-icon.webp" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active text-white" aria-current="page" href="#">Sobre nós</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item " href="#">Action</a></li>
                                <li><a class="dropdown-item " href="#">Another action</a></li>
                                <li><a class="dropdown-item " href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">P&D</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Fale conosco</a>
                        </li>
                        <li class="translate nav-item text-center">
                            <a class="nav-link text-white" href="#"></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>