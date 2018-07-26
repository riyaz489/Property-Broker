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

$cakeDescription = 'Property Broker';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset('UTF-8') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
        
    </title>
    <?=  $this->Html->meta(
    'favicon.ico',
    '/icon.ico',
    ['type' => 'icon']); ?>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
   <?= $this->Html->css('linearicons.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('nice-select.css') ?>
    <?= $this->Html->css('ion.rangeSlider.css') ?>
    <?= $this->Html->css('ion.rangeSlider.skinFlat.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('main.css') ?>

</head>
<body>
   
    <?= $this->element("header") ?>
    <!--fetching header elemnt from element folder -->
    <?= $this->fetch('content') ?>  
    <!--fetching content from template pages-->
    <?= $this->element("footer")?>
    <!--fetching header elemnt from element folder -->

<?= $this->Html->script(['vendor/jquery-2.2.4.min.js','vendor/bootstrap.min.js','jquery.ajaxchimp.min.js','jquery.nice-select.min.js','ion.rangeSlider.js','jquery.magnific-popup.min.js','main.js']) ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCe_dlb7aAPar4o5p_q0VaosyvvqOvfhQ4&callback=initMap "></script>
<!-- add more styles to map using sanzyy styles -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
