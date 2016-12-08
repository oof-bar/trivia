<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

    <script src="https://use.typekit.net/pdn2pqu.js"></script>
    <script>try{Typekit.load({ async: false });}catch(e){}</script>

    <?= css('assets/css/app.css') ?>
    <?= css('@auto') ?>

  </head>
  <body class="<?= Help::body_classes() ?>">
    <header>
      <? snippet('menu') ?>
    </header>
    <main>
