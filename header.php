<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo ('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href ="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>
    <div class="container">
        <header class="row">
          <div class="twelve columns">
              <h3><?php bloginfo ('name'); ?></h3>
              <h5><?php bloginfo ('description'); ?></h5>
              <hr>
          </div>

        </header>
