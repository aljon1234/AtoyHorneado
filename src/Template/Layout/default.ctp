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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- icono de ventana -->
    <?= $this->Html->meta(
        'icon.png',
        'img/AquiToyApp.png',
        ['type' => 'icon']
    );  ?>



    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
     AquiToy 
    </title>
    <!-- Tipo de letra de google -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic') ?>
<!-- ingresamos nuestro css y bootstrap -->
      <?= $this->Html->css(['bootstrap','estilos','animate.min','font-awesome.min']) ?>
    <?= $this->Html->script(['jquery.min','bootstrap.min','owl.carousel.min','wow.min','smooth-scroll.min','sitio']) ?>

   
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->element('menu')?>
    <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <?= $this->element('pie')?>
    </footer>
</body>
</html>
