<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<header class="site-header">
  <div class="header-inner">
    <a class="logo" href="index.php" aria-label="NC – Neil Concepcion, home">NC</a>
    <nav class="main-nav" aria-label="Main navigation">
      <ul>
        <?php foreach (['index.php' => 'Home', 'about.php' => 'About', 'projects.php' => 'Projects', 'skills.php' => 'Skills', 'contact.php' => 'Contact'] as $file => $label): ?>
        <li><a href="<?= $file ?>"<?= $currentPage === $file ? ' aria-current="page"' : '' ?>><?= $label ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>
