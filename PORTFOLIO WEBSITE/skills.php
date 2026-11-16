<?php
$skillGroups = [
    [
        'id' => 'hw', 'title' => 'Computer hardware', 'badge_style' => '',
        'skills' => [
            ['id' => 'hw-pc', 'name' => 'PC assembly and diagnostics', 'value' => 90, 'type' => 'progress'],
            ['id' => 'hw-logic', 'name' => 'Breadboard logic circuit prototyping', 'value' => 50, 'type' => 'meter'],
            ['id' => 'hw-opamp', 'name' => 'Op-amp amplifier analysis', 'value' => 20, 'type' => 'meter'],
        ],
        'badges' => ['PC assembly', 'Hardware diagnostics', 'Breadboarding', 'Op-amp analysis', 'Circuit schematics'],
    ],
    [
        'id' => 'code', 'title' => 'Coding and software engineering', 'badge_style' => 'alt',
        'skills' => [
            ['id' => 'code-html', 'name' => 'HTML5', 'value' => 50, 'type' => 'progress'],
            ['id' => 'code-css', 'name' => 'CSS3', 'value' => 50, 'type' => 'progress'],
            ['id' => 'code-ds', 'name' => 'Algorithms and data structures', 'value' => 50, 'type' => 'meter'],
            ['id' => 'code-se', 'name' => 'Software engineering principles', 'value' => 50, 'type' => 'meter'],
        ],
        'badges' => ['HTML5', 'CSS3', 'Algorithms', 'Data structures', 'Software engineering'],
    ],
    [
        'id' => 'bike', 'title' => 'Classic bikes and mechanical work', 'badge_style' => '',
        'skills' => [
            ['id' => 'bike-restore', 'name' => 'Motorcycle restoration', 'value' => 75, 'type' => 'progress'],
            ['id' => 'bike-parts', 'name' => 'Aftermarket part sourcing', 'value' => 80, 'type' => 'meter'],
            ['id' => 'bike-custom', 'name' => 'Custom mechanical work and modifications', 'value' => 75, 'type' => 'meter'],
        ],
        'badges' => ['Restoration', 'Part sourcing', 'Custom work', 'Hardware mods'],
    ],
    [
        'id' => 'game', 'title' => 'PC gaming', 'badge_style' => 'alt',
        'skills' => [
            ['id' => 'game-comp', 'name' => 'Competitive play', 'value' => 80, 'type' => 'meter'],
            ['id' => 'game-tactical', 'name' => 'Tactical and strategy games', 'value' => 85, 'type' => 'meter'],
        ],
        'description' => 'Mostly Riot Games titles, where positioning, team calls, and reading the other side matter more than aim alone.',
        'badges' => ['Riot Games', 'Tactical shooters', 'Strategy', 'Teamwork'],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Hardware, coding, classic bike, and PC gaming skills.">
  <title>Skills | NC Portfolio</title>
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
        <h1>Skills</h1>
        <p>Four areas I work in. This shows where skills that I excel at and skills that I need to work on.</p>
      </header>

      <?php foreach ($skillGroups as $group): ?>
      <section class="skill-group card" aria-labelledby="<?= $group['id'] ?>-title">
        <h2 id="<?= $group['id'] ?>-title"><?= $group['title'] ?></h2>
        <?php foreach ($group['skills'] as $skill): ?>
        <div class="meter-row">
          <label for="<?= $skill['id'] ?>"><?= $skill['name'] ?></label>
          <?php if ($skill['type'] === 'progress'): ?>
          <progress id="<?= $skill['id'] ?>" max="100" value="<?= $skill['value'] ?>"><?= $skill['value'] ?>%</progress>
          <?php else: ?>
          <meter id="<?= $skill['id'] ?>" min="0" max="100" low="40" high="70" optimum="90" value="<?= $skill['value'] ?>"><?= $skill['value'] ?>%</meter>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <?php if (!empty($group['description'])): ?><p><?= $group['description'] ?></p><?php endif; ?>
        <ul class="badges">
          <?php foreach ($group['badges'] as $badge): ?>
          <li class="badge<?= $group['badge_style'] === 'alt' ? ' alt' : '' ?>"><?= $badge ?></li>
          <?php endforeach; ?>
        </ul>
      </section>
      <?php endforeach; ?>
    </div>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
