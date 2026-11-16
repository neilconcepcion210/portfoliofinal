<?php
$coreSubjects = [
    'Data Structures' => 'arrays, linked lists, stacks, queues, trees, and choosing the right one.',
    'Operating Systems' => 'processes, scheduling, memory, and how the machine shares its resources.',
    'Logic Circuit Design' => 'gates, combinational and sequential circuits, built and tested on a breadboard.',
    'Data Communications' => 'how data is encoded, sent, and checked across a network.',
    'Software Engineering' => 'requirements, design, testing, and working in a team.',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Academic profile and coursework of Neil Concepcion, Computer Engineering student.">
  <title>About | NC Portfolio</title>
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
        <h1>About me</h1>
        <p>Where I study, what I&rsquo;m learning, and what I do when I&rsquo;m away from the keyboard.</p>
      </header>

      <div class="about-layout">
        <article>
          <section aria-labelledby="profile-title">
            <h2 id="profile-title">Academic profile</h2>
            <p>I&rsquo;m <strong>Neil Patrick E. Concepcion</strong>, a third-year Computer Engineering student at <em>Dr. Yanga&rsquo;s Colleges Inc.</em> (DYCI). I started my degree at National University Manila before continuing at DYCI.</p>
            <p>Computer engineering sits where hardware meets software, and that&rsquo;s the part I enjoy most. I like knowing how a signal moves through a circuit <em>and</em> how the program that reads it is written.</p>
            <blockquote>
              <p>I want to understand a system from the transistor up to the interface.</p>
            </blockquote>
          </section>

          <section aria-labelledby="coursework-title">
            <h2 id="coursework-title">Coursework</h2>
            <h3>Core subjects</h3>
            <ul class="course-list">
              <?php foreach ($coreSubjects as $subject => $description): ?>
              <li><strong><?= $subject ?>:</strong> <?= $description ?></li>
              <?php endforeach; ?>
            </ul>
            <h3>Beyond the classroom</h3>
            <p>I restore and tune a classic motorcycle, build and troubleshoot PCs, and play tactical PC games. <mark>Each one trains the same habit: diagnose first, then fix.</mark></p>
          </section>
        </article>

        <aside class="note" aria-labelledby="aside-title">
          <h2 id="aside-title">Notes on this site</h2>
          <p>This portfolio is hand-coded with semantic HTML5 and plain CSS.</p>
          <p>A sample of the markup:<br>
          <code>&lt;html lang="en"&gt;</code><br>
          <code>&lt;main&gt; &amp; &lt;section&gt;</code></p>
          <p><small>&copy; 2026 Neil Concepcion. Built for a Cognate/Track Course 1 project.</small></p>
        </aside>
      </div>
    </div>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>