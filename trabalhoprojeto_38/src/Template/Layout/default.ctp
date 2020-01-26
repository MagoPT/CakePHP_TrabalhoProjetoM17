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
 */
use Cake\I18n\I18n; //Import do Padrão para as traduções
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

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://duckidentity.com/profile-empresa/dashboard/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- CDN para usarmos icones do font-awesome-->
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="https://duckidentity.com"/>
                <div><span>DuckIdentity</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" style="font-size: 1.5rem" id="accordionSidebar">
                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-users', 'style'=>'color: white')), array('controller' => 'utilizador'), array('escape' => false)) ?>
                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-building', 'style'=>'color: white')), array('controller' => 'empresa'), array('escape' => false)) ?>
                <a style="font-size: 3rem">-</a>
                <?= $this->Html->link($this->Html->tag('i', __('Regulações'), array('style'=>'color: white')), array('controller' => 'regulacao'), array('escape' => false)) ?>
                <?= $this->Html->link($this->Html->tag('i', __('Contrato'), array('style'=>'color: white')), array('controller' => 'Contrato'), array('escape' => false)) ?>
                <a style="font-size: 3rem">-</a>
                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-image', 'style'=>'color: white')), array('controller' => 'imagens'), array('escape' => false)) ?>
                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-book', 'style'=>'color: white')), array('controller' => 'webgrafia'), array('escape' => false)) ?>
                <?=$this -> element('time')?>
            </ul>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?= __('Linguagem')?></span></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                   <a class="dropdown-item" role="presentation" id="pt"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>PT</a><a class="dropdown-item" role="presentation" id="en"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>EN</a></div>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>
            <div>
                <table class="table dataTable my-0" id="dataTable">

                <?= $this->Flash->render() ?>
                <div class="container clearfix">
                    <?= $this->fetch('content') ?>
                </div>

                </table>
            </div>

    <script src="https://duckidentity.com/profile-empresa/dashboard/assets/js/jquery.min.js"></script>
    <script src="https://duckidentity.com/profile-empresa/dashboard/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://duckidentity.com/profile-empresa/dashboard/assets/js/theme.js"></script>
            <script>
                $( "#pt" ).click(function() {
                    alert( "Linguagem alterada para PT" );
                });
                $( "#en" ).click(function() {
                    alert( "Linguagem alterada para EN" );
                });
            </script>
</body>

</html>
