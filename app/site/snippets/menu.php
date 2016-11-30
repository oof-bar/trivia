<section class="menu">
  <div class="wrap">
    <div class="nav">
      <a href="<?= page('home')->url() ?>" class="dashboard tab active">
        <span class="icon"><?= Help::inline_svg('dashboard-icon.svg', [24, 24]) ?></span>
        <span>Dashboard</span>
      </a>
      <a href="<?= page('stats')->url() ?>" class="stats tab">
        <span class="icon"><?= Help::inline_svg('table-icon.svg', [24, 24]) ?></span>
        <span>Stats Table</span>
      </a>
      <a href="#" class="charts tab">
        <span class="icon"><?= Help::inline_svg('chart-icon.svg', [24, 24]) ?></span>
        <span>Charts</span>
      </a>
      <a href="<?= page('about')->url() ?>" class="about tab">
        <span class="icon"><?= Help::inline_svg('info-icon.svg', [24, 24]) ?></span>
        <span>About</span>
      </a>
    </div>
  </div>
</section>
