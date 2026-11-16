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

  <header class="site-header">
    <div class="header-inner">
      <a class="logo" href="index.php" aria-label="NC – Neil Concepcion, home">NC</a>
      <nav class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="skills.php" aria-current="page">Skills</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main-content">
    <div class="container">
      <header class="page-title">
        <h1>Skills</h1>
        <p>Four areas I work in. This shows where skills that I excel at and skills that I need to work on.</p>
      </header>

      <section class="skill-group card" aria-labelledby="hw-title">
        <h2 id="hw-title">Computer hardware</h2>
        <div class="meter-row">
          <label for="hw-pc">PC assembly and diagnostics</label>
          <progress id="hw-pc" max="100" value="90">90%</progress>
        </div>
        <div class="meter-row">
          <label for="hw-logic">Breadboard logic circuit prototyping</label>
          <meter id="hw-logic" min="0" max="100" low="40" high="70" optimum="90" value="50">50%</meter>
        </div>
        <div class="meter-row">
          <label for="hw-opamp">Op-amp amplifier analysis</label>
          <meter id="hw-opamp" min="0" max="100" low="40" high="70" optimum="90" value="20">20%</meter>
        </div>
        <ul class="badges">
          <li class="badge">PC assembly</li>
          <li class="badge">Hardware diagnostics</li>
          <li class="badge">Breadboarding</li>
          <li class="badge">Op-amp analysis</li>
          <li class="badge">Circuit schematics</li>
        </ul>
      </section>

      <section class="skill-group card" aria-labelledby="code-title">
        <h2 id="code-title">Coding and software engineering</h2>
        <div class="meter-row">
          <label for="code-html">HTML5</label>
          <progress id="code-html" max="100" value="50">50%</progress>
        </div>
        <div class="meter-row">
          <label for="code-css">CSS3</label>
          <progress id="code-css" max="100" value="50">50%</progress>
        </div>
        <div class="meter-row">
          <label for="code-ds">Algorithms and data structures</label>
          <meter id="code-ds" min="0" max="100" low="40" high="70" optimum="90" value="50">50%</meter>
        </div>
        <div class="meter-row">
          <label for="code-se">Software engineering principles</label>
          <meter id="code-se" min="0" max="100" low="40" high="70" optimum="90" value="50">50%</meter>
        </div>
        <ul class="badges">
          <li class="badge alt">HTML5</li>
          <li class="badge alt">CSS3</li>
          <li class="badge alt">Algorithms</li>
          <li class="badge alt">Data structures</li>
          <li class="badge alt">Software engineering</li>
        </ul>
      </section>

      <section class="skill-group card" aria-labelledby="bike-title">
        <h2 id="bike-title">Classic bikes and mechanical work</h2>
        <div class="meter-row">
          <label for="bike-restore">Motorcycle restoration</label>
          <progress id="bike-restore" max="100" value="75">75%</progress>
        </div>
        <div class="meter-row">
          <label for="bike-parts">Aftermarket part sourcing</label>
          <meter id="bike-parts" min="0" max="100" low="40" high="70" optimum="90" value="80">80%</meter>
        </div>
        <div class="meter-row">
          <label for="bike-custom">Custom mechanical work and modifications</label>
          <meter id="bike-custom" min="0" max="100" low="40" high="70" optimum="90" value="75">75%</meter>
        </div>
        <ul class="badges">
          <li class="badge">Restoration</li>
          <li class="badge">Part sourcing</li>
          <li class="badge">Custom work</li>
          <li class="badge">Hardware mods</li>
        </ul>
      </section>

      <section class="skill-group card" aria-labelledby="game-title">
        <h2 id="game-title">PC gaming</h2>
        <div class="meter-row">
          <label for="game-comp">Competitive play</label>
          <meter id="game-comp" min="0" max="100" low="40" high="70" optimum="90" value="80">80%</meter>
        </div>
        <div class="meter-row">
          <label for="game-tactical">Tactical and strategy games</label>
          <meter id="game-tactical" min="0" max="100" low="40" high="70" optimum="90" value="85">85%</meter>
        </div>
        <p>Mostly Riot Games titles, where positioning, team calls, and reading the other side matter more than aim alone.</p>
        <ul class="badges">
          <li class="badge alt">Riot Games</li>
          <li class="badge alt">Tactical shooters</li>
          <li class="badge alt">Strategy</li>
          <li class="badge alt">Teamwork</li>
        </ul>
      </section>
    </div>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <p>&copy; 2026 Neil Concepcion. All rights reserved.</p>
      <p><small>Computer Engineering, Dr. Yanga&rsquo;s Colleges Inc. &middot; <a href="contact.php">Get in touch</a></small></p>
    </div>
  </footer>
</body>
</html>
