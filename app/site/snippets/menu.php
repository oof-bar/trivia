<? $links = [
  [
    'page' => 'home',
    'icon' => 'dashboard',
    'title' => 'Dashboard'
  ],
  [
    'page' => 'stats',
    'icon' => 'table',
    'title' => 'Stats'
  ],
  [
    'page' => 'charts',
    'icon' => 'chart',
    'title' => 'Dashboard'
  ],
  [
    'page' => 'about',
    'icon' => 'info',
    'title' => 'About'
  ]
] ?>

<section class="menu">
  <div class="wrap">
    <nav class="main">
      <? foreach ( $links as $link ) { ?>
        <? $p = page($link['page']) ?>
        <a href="<?= $p->url() ?>" class="<?= join([$p->uri(), 'tab', $p->isOpen() ? 'active' : 'inactive'], ' ') ?>">
          <span class="icon"><?= Help::inline_svg("{$link['icon']}-icon.svg", [24, 24]) ?></span>
          <span><?= $p->title() ?></span>
        </a>
      <? } ?>
    </nav>
  </div>
</section>
