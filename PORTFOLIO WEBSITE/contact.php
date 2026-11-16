<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact Neil Concepcion about web development, bike builds, or general inquiries.">
  <title>Contact | NC Portfolio</title>
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
          <li><a href="skills.php">Skills</a></li>
          <li><a href="contact.php" aria-current="page">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main-content">
    <div class="container">
      <header class="page-title">
        <h1>Contact</h1>
        <p>Have a web project, a question about my work, or a bike build to talk through? Send a message.</p>
      </header>

      <div id="form-status" class="form-status" role="status" tabindex="-1" hidden></div>
      <form action="submit-contact.php" method="post">
        <fieldset>
          <legend>Send me a message</legend>

          <div class="form-row">
            <label for="fullname">Full name</label>
            <input type="text" id="fullname" name="fullname" placeholder="Juan Dela Cruz" autocomplete="name" required tabindex="1" accesskey="n">
          </div>

          <div class="form-row">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" required tabindex="2" accesskey="e">
          </div>

          <div class="form-row">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="0917 123 4567" autocomplete="tel" tabindex="3" accesskey="p">
          </div>

          <div class="form-row">
            <label for="topic">Topic</label>
            <select id="topic" name="topic" required tabindex="4" accesskey="t">
              <option value="">Choose a topic</option>
              <option value="general">General Inquiry</option>
              <option value="web">Web Development</option>
              <option value="bike">Bike Build Discussion</option>
            </select>
          </div>

          <div class="form-row">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" placeholder="What would you like to talk about?" required tabindex="5" accesskey="m"></textarea>
          </div>

          <div class="form-actions">
            <button type="submit" tabindex="6" accesskey="s">Send message</button>
            <button type="reset" tabindex="7" accesskey="r">Clear form</button>
          </div>
          <div class="form-row" hidden aria-hidden="true">
            <label for="website">Website</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
          </div>
        </fieldset>
      </form>
    </div>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <p>&copy; 2026 Neil Concepcion. All rights reserved.</p>
      <p><small>Computer Engineering, Dr. Yanga&rsquo;s Colleges Inc. &middot; <a href="contact.php">Get in touch</a></small></p>
    </div>
  </footer>

  <script>
    const status = new URLSearchParams(location.search).get('status');
    const messages = {
      sent: {
        title: 'Message sent.',
        detail: 'Thank you for contacting me.',
        className: 'form-status-success',
        role: 'status'
      },
      error: {
        title: 'Message not saved.',
        detail: 'Please check your details and try again.',
        className: 'form-status-error',
        role: 'alert'
      }
    };

    if (status === 'sent' || status === 'error') {
      const box = document.getElementById('form-status');
      const { title, detail, className, role } = messages[status];

      box.innerHTML = `
        <div class="form-status-text">
          <strong>${title}</strong>
          <span>${detail}</span>
        </div>
        <button type="button" class="form-status-close" aria-label="Close notification">&times;</button>
      `;
      box.classList.add(className);
      box.setAttribute('role', role);
      box.hidden = false;

      box.querySelector('.form-status-close').addEventListener('click', () => {
        box.hidden = true;
      });

      setTimeout(() => {
        box.hidden = true;
      }, 5000);

      history.replaceState(null, '', location.pathname);
    }
  </script>
</body>
</html>