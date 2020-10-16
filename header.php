<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudify</title>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/style.css">
</head>
<body>
    <div id="app">
        <div id="header">
            <nav class="navbar navbar-expand-lg <?= is_home() ? 'navbar-transparent' : 'navbar-default'  ?>">
                <div class="container">
                      <a class="navbar-brand" href="<?= home_url() ?>">
                        
                          <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/<?= is_home() ? 'logo white.svg' : 'logo blue.svg' ?>" alt="" srcset="">
                      </a>
                      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button> -->
                      <?php
                      $menu = wp_nav_menu([
                          'menu_class' => 'navbar-nav ml-auto',
                          'container_class' => 'collapse navbar-collapse'
                      ]);
                      ?>
                      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Partnership</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                          <li class="nav-item">
                            <a href="<?= admin_url() ?>" class="btn btn-outline-white btn-long">LOGIN</a>
                          </li>
                        </ul>
                      </div> -->
                </div>
              </nav>
        </div>
        