<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min']) ?>
    <?= $this->Html->script(['bootstrap.min','jquery-3.7.1.min', 'bootstrap.bundle']) ?> <!--El bootstrap.bundle arregla lo del menu desplegable -->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
        body{
            background-color: #071325;
            font-family: roboto, sans-serif;
            text-transform: inherit;
        }

        .navbar, .dropdown-menu {
            background-color: #05111e;
        }

        .navbar a{
            color: #fff;
        }

        .navbar-nav .nav-link.active, .navbar-nav .nav-link.show{
            color: #85784a;
            border-bottom: 4px solid #85784a;
        }

        .nav-link:hover, .dropdown-item:hover{
            background-color: #05111e;
            color: #85784a;
            border-bottom: 4px solid #85784a;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="webroot/img/smite.png" alt="Smite" width="85" height="30">
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Aprendiendo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Conoce las clases</a></li>
                            <li><a class="dropdown-item" href="#">Domina los conceptos basicos</a></li>
                            <li><a class="dropdown-item" href="#">Explora los modos de juego</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Modos de juego</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dioses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Items</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>