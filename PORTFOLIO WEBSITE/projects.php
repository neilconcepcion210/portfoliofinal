<?php
$projects = [
    [
        'category' => 'Mechanical',
        'title' => 'Classic Bike Build',
        'description' => 'Ongoing work on a Keeway Cafe Racer 152, focused on maintenance and custom touches.',
        'highlights' => [
            'Custom mechanical maintenance',
            'Hardware upgrades',
            'Bar-end side mirror fittings',
            'Custom exhaust setup',
            'CNC bolt customization',
        ],
        'image' => 'motor.jpg',
        'image_alt' => 'Keeway Cafe Racer 152 classic bike build with custom exhaust and bar-end mirrors',
        'caption' => 'Classic Scrambler Bike Build (Keeway Cafe Racer 152) Showcase',
    ],
    [
        'category' => 'Web',
        'title' => 'Personal Portfolio Website',
        'description' => "The site you're on: a multi-page, responsive portfolio built with semantic HTML5 and an external CSS architecture.",
        'highlights' => [
            'Five pages with shared navigation',
            'Mobile-first CSS with Flexbox and Grid',
            'Accessible, keyboard-friendly, and print-ready',
        ],
    ],
    [
        'category' => 'Group project',
        'title' => 'School of Psychology (SOP) Website',
        'description' => 'A group web development project designed for the School of Psychology.',
        'image' => 'sopfrontpage.jpg',
        'image_alt' => 'School of Psychology Web Project Preview',
        'caption' => 'School of Psychology (SOP) Group Web Project Showcase',
    ],

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Featured projects: classic bike build, personal portfolio website, and School of Psychology website.">
  <title>Projects | NC Portfolio</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to Content</a>

  <?php require __DIR__ . '/header.php'; ?>

  <main id="main-content">
    <div class="container">
      <header class="page-title">
        <h1>Projects</h1>
        <p>A selection of my projects and builds.</p>
      </header>

      <section class="project-grid" aria-label="Featured projects">
        <?php foreach ($projects as $project): ?>
        <article class="card">
          <span class="tag"><?= $project['category'] ?></span>
          <h2><?= $project['title'] ?></h2>
          <p><?= $project['description'] ?></p>
          <?php if (!empty($project['highlights'])): ?>
          <ul>
            <?php foreach ($project['highlights'] as $highlight): ?>
            <li><?= $highlight ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <?php if (!empty($project['image'])): ?>
          <figure>
            <img src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project['image_alt'], ENT_QUOTES, 'UTF-8') ?>" width="600" height="400">
            <figcaption><?= $project['caption'] ?></figcaption>
          </figure>
          <?php endif; ?>
        </article>
        <?php endforeach; ?>
      </section>
    </div>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
