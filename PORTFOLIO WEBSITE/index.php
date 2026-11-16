<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio of Neil Concepcion, a third-year Computer Engineering student.">
  <title>Home | NC Portfolio</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to Content</a>

  <header class="site-header">
    <div class="header-inner">
      <a class="logo" href="index.php" aria-label="NC – Neil Concepcion, home">NC</a>
      <nav class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a href="index.php" aria-current="page">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="skills.php">Skills</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main-content">
    <section class="hero" aria-labelledby="hero-title">
      <img src="Header.jpg" alt="" class="hero-bg-photo">

      <div class="container">
        <div class="hero-copy">
          <h1 id="hero-title">Neil Concepcion: My Portfolio Page.</h1>
          <p class="lead">I&rsquo;m a third-year <strong>Computer Engineering</strong> student working across hardware and software: logic circuits on a breadboard, algorithms in code, and wrenches on a classic bike.</p>
          <div class="cta-row">
            <a class="btn" href="projects.php">View my projects</a>
            <a class="btn btn-outline" href="contact.php">Contact me</a>
          </div>
        </div>
        <figure class="spec-plate" aria-label="Quick facts about Neil">
          <h2>Who am I?</h2>
          <dl>
            <div class="row"><dt>Name</dt><dd>Neil Patrick E. Concepcion</dd></div>
            <div class="row"><dt>Program</dt><dd>BS Computer Engineering</dd></div>
            <div class="row"><dt>Year</dt><dd>3rd year</dd></div>
            <div class="row"><dt>School</dt><dd>DYCI</dd></div>
            <div class="row"><dt>Daily rider</dt><dd>Keeway Cafe Racer 152 (Scrambler)</dd></div>
          </dl>
        </figure>
      </div>
    </section>

    <section aria-labelledby="summary-title">
      <div class="container">
        <h2 id="summary-title">At a glance</h2>
        <div class="card-row">
          <article class="card">
            <span class="tag">Studying</span>
            <h3>Engineering and computer science</h3>
            <p>Data Structures, Operating Systems, Logic Circuit Design, Data Communications, and Software Engineering.</p>
            <a href="about.php">Read my background</a>
          </article>
          <article class="card">
            <span class="tag">Building</span>
            <h3>Websites and a classic bike</h3>
            <p>A responsive portfolio, a group site for the School of Psychology, and a Keeway Cafe Racer 152 build.</p>
            <a href="projects.php">See the projects</a>
          </article>
          <article class="card">
            <span class="tag">Playing</span>
            <h3>Tactical PC games</h3>
            <p>Strategy-driven competitive play, mostly Riot Games titles, plus hands-on PC builds and diagnostics.</p>
            <a href="skills.php">Check my skills</a>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <p>&copy; 2026 Neil Concepcion. All rights reserved.</p>
      <p><small>Computer Engineering, Dr. Yanga&rsquo;s Colleges Inc. &middot; <a href="contact.php">Get in touch</a></small></p>
    </div>
  </footer>
</body>
</html>