<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Songelael | Full Stack Developer</title>
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body>

  <!-- ===== NAVBAR ===== -->
  <nav id="navbar">
    <div class="nav-container">
      <a href="#home" class="logo">S<span>.</span>DEV</a>
      <ul class="nav-links" id="navLinks">
        <li><a href="#home" class="nav-link active">Home</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#skills" class="nav-link">Skills</a></li>
        <li><a href="#projects" class="nav-link">Projects</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
      <div class="hamburger" id="hamburger" aria-label="Toggle navigation" role="button" tabindex="0">
        <span></span><span></span><span></span>
      </div>
    </div>
  </nav>

  <!-- ===== HERO ===== -->
  <section id="home" class="hero">
    <div class="hero-content">
      <p class="hero-greeting">Hello, I'm</p>
      <h1 class="hero-name">Songelael</h1>
      <h2 class="hero-title">
        <span id="typed-text"></span><span class="cursor">|</span>
      </h2>
      <p class="hero-desc">
        I craft modern, scalable web applications and intelligent systems 
        that solve real-world problems with clean, efficient code.
      </p>
      <div class="hero-btns">
        <a href="#projects" class="btn btn-primary">View My Work</a>
        <a href="uploads/cv.pdf" download class="btn btn-outline">
          <i class="fas fa-download"></i> Download CV
        </a>
      </div>
      <div class="hero-socials">
        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-img-wrapper">
        <div class="hero-img-placeholder">
          <i class="fas fa-user-circle"></i>
        </div>
        <div class="hero-ring ring-1"></div>
        <div class="hero-ring ring-2"></div>
      </div>
    </div>
    <a href="#about" class="scroll-down" aria-label="Scroll down">
      <i class="fas fa-chevron-down"></i>
    </a>
  </section>

  <!-- ===== ABOUT ===== -->
  <section id="about" class="section about">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Get To Know Me</span>
        <h2 class="section-title">About <span>Me</span></h2>
      </div>
      <div class="about-grid">
        <div class="about-img-col">
          <div class="about-img-card">
            <div class="about-img-placeholder">
              <i class="fas fa-code"></i>
            </div>
          </div>
          <div class="about-stats">
            <div class="stat-card">
              <h3>2+</h3>
              <p>Years Experience</p>
            </div>
            <div class="stat-card">
              <h3>20+</h3>
              <p>Projects Done</p>
            </div>
            <div class="stat-card">
              <h3>10+</h3>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>
        <div class="about-text-col">
          <h3>Full Stack Developer & Problem Solver</h3>
          <p>
            I'm a passionate Full Stack Developer with experience building 
            web applications from the ground up. I enjoy turning complex 
            problems into simple, beautiful and intuitive solutions.
          </p>
          <p>
            My expertise spans both frontend and backend development, allowing 
            me to deliver complete end-to-end solutions. I'm always eager to 
            learn new technologies and improve my craft.
          </p>
          <div class="about-info">
            <div class="info-item">
              <span class="info-label"><i class="fas fa-user"></i> Name</span>
              <span class="info-value">Songelael</span>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-envelope"></i> Email</span>
              <span class="info-value">songelael@email.com</span>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-map-marker-alt"></i> Location</span>
              <span class="info-value">Tanzania</span>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-briefcase"></i> Status</span>
              <span class="info-value available">Available for hire</span>
            </div>
          </div>
          <a href="#contact" class="btn btn-primary">Let's Talk</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SKILLS ===== -->
  <section id="skills" class="section skills">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">What I Know</span>
        <h2 class="section-title">My <span>Skills</span></h2>
      </div>
      <div class="skills-grid">
        <div class="skills-col">
          <h3 class="skills-subtitle"><i class="fas fa-laptop-code"></i> Frontend</h3>
          <div class="skill-item">
            <div class="skill-info"><span>HTML5 & CSS3</span><span>95%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="95"></div></div>
          </div>
          <div class="skill-item">
            <div class="skill-info"><span>JavaScript</span><span>85%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="85"></div></div>
          </div>
          <div class="skill-item">
            <div class="skill-info"><span>React.js</span><span>75%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="75"></div></div>
          </div>
          <div class="skill-item">
            <div class="skill-info"><span>Bootstrap / Tailwind</span><span>90%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="90"></div></div>
          </div>
        </div>
        <div class="skills-col">
          <h3 class="skills-subtitle"><i class="fas fa-server"></i> Backend</h3>
          <div class="skill-item">
            <div class="skill-info"><span>PHP</span><span>88%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="88"></div></div>
          </div>
          <div class="skill-item">
            <div class="skill-info"><span>MySQL</span><span>85%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="85"></div></div>
          </div>
          <div class="skill-item">
            <div class="skill-info"><span>Node.js</span><span>70%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="70"></div></div>
          </div>
          <div class="skill-item">
            <div class="skill-info"><span>Python</span><span>72%</span></div>
            <div class="skill-bar"><div class="skill-fill" data-width="72"></div></div>
          </div>
        </div>
      </div>
      <div class="tools-section">
        <h3 class="skills-subtitle"><i class="fas fa-tools"></i> Tools & Technologies</h3>
        <div class="tools-grid">
          <div class="tool-badge"><i class="fab fa-git-alt"></i> Git</div>
          <div class="tool-badge"><i class="fab fa-github"></i> GitHub</div>
          <div class="tool-badge"><i class="fab fa-docker"></i> Docker</div>
          <div class="tool-badge"><i class="fas fa-database"></i> phpMyAdmin</div>
          <div class="tool-badge"><i class="fas fa-code"></i> VS Code</div>
          <div class="tool-badge"><i class="fab fa-linux"></i> Linux</div>
          <div class="tool-badge"><i class="fas fa-server"></i> Apache</div>
          <div class="tool-badge"><i class="fab fa-figma"></i> Figma</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PROJECTS ===== -->
  <section id="projects" class="section projects">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">My Work</span>
        <h2 class="section-title">Recent <span>Projects</span></h2>
      </div>
      <div class="projects-grid">

        <div class="project-card">
          <div class="project-img">
            <i class="fas fa-shopping-cart project-icon"></i>
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">Bootstrap</span>
            </div>
            <h3>E-Commerce Platform</h3>
            <p>A full-featured online store with product management, cart, checkout, and admin dashboard.</p>
            <div class="project-links">
              <a href="#" class="btn-icon" aria-label="Live Demo"><i class="fas fa-external-link-alt"></i> Demo</a>
              <a href="#" class="btn-icon" aria-label="Source Code"><i class="fab fa-github"></i> Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img" style="background: linear-gradient(135deg,#667eea,#764ba2)">
            <i class="fas fa-tasks project-icon"></i>
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span class="tag">React</span><span class="tag">Node.js</span><span class="tag">MongoDB</span>
            </div>
            <h3>Task Management App</h3>
            <p>A collaborative project management tool with real-time updates, teams, and progress tracking.</p>
            <div class="project-links">
              <a href="#" class="btn-icon"><i class="fas fa-external-link-alt"></i> Demo</a>
              <a href="#" class="btn-icon"><i class="fab fa-github"></i> Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img" style="background: linear-gradient(135deg,#11998e,#38ef7d)">
            <i class="fas fa-robot project-icon"></i>
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span class="tag">Python</span><span class="tag">Flask</span><span class="tag">AI</span>
            </div>
            <h3>AI Chatbot System</h3>
            <p>An intelligent chatbot that leverages NLP to answer user queries and automate support tasks.</p>
            <div class="project-links">
              <a href="#" class="btn-icon"><i class="fas fa-external-link-alt"></i> Demo</a>
              <a href="#" class="btn-icon"><i class="fab fa-github"></i> Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img" style="background: linear-gradient(135deg,#f7971e,#ffd200)">
            <i class="fas fa-hospital project-icon"></i>
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">JS</span>
            </div>
            <h3>Hospital Management System</h3>
            <p>Manages patient records, appointments, billing, and doctor scheduling for clinics.</p>
            <div class="project-links">
              <a href="#" class="btn-icon"><i class="fas fa-external-link-alt"></i> Demo</a>
              <a href="#" class="btn-icon"><i class="fab fa-github"></i> Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img" style="background: linear-gradient(135deg,#fc4a1a,#f7b733)">
            <i class="fas fa-graduation-cap project-icon"></i>
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span class="tag">PHP</span><span class="tag">Bootstrap</span><span class="tag">MySQL</span>
            </div>
            <h3>School Portal</h3>
            <p>A student portal with grades, attendance, timetables, and parent communication features.</p>
            <div class="project-links">
              <a href="#" class="btn-icon"><i class="fas fa-external-link-alt"></i> Demo</a>
              <a href="#" class="btn-icon"><i class="fab fa-github"></i> Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img" style="background: linear-gradient(135deg,#4776e6,#8e54e9)">
            <i class="fas fa-chart-line project-icon"></i>
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span class="tag">React</span><span class="tag">Chart.js</span><span class="tag">API</span>
            </div>
            <h3>Analytics Dashboard</h3>
            <p>A data visualization dashboard with real-time charts, reports, and KPI tracking.</p>
            <div class="project-links">
              <a href="#" class="btn-icon"><i class="fas fa-external-link-alt"></i> Demo</a>
              <a href="#" class="btn-icon"><i class="fab fa-github"></i> Code</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== CONTACT ===== -->
  <section id="contact" class="section contact">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Get In Touch</span>
        <h2 class="section-title">Contact <span>Me</span></h2>
      </div>
      <div class="contact-grid">
        <div class="contact-info">
          <h3>Let's Work Together</h3>
          <p>Have a project in mind or want to discuss opportunities? Feel free to reach out. I'm always open to new ideas and collaborations.</p>
          <div class="contact-cards">
            <div class="contact-card">
              <div class="contact-icon"><i class="fas fa-envelope"></i></div>
              <div>
                <h4>Email</h4>
                <p>songelael@email.com</p>
              </div>
            </div>
            <div class="contact-card">
              <div class="contact-icon"><i class="fas fa-phone"></i></div>
              <div>
                <h4>Phone</h4>
                <p>+255 700 000 000</p>
              </div>
            </div>
            <div class="contact-card">
              <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
              <div>
                <h4>Location</h4>
                <p>Tanzania, East Africa</p>
              </div>
            </div>
          </div>
          <div class="contact-socials">
            <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div class="contact-form-col">
          <?php
            $success = '';
            $error   = '';
            if (isset($_POST['submit'])) {
              include 'database.php';
              $name    = htmlspecialchars(trim($_POST['name']));
              $email   = htmlspecialchars(trim($_POST['email']));
              $subject = htmlspecialchars(trim($_POST['subject']));
              $message = htmlspecialchars(trim($_POST['message']));

              if ($name && $email && $message) {
                $stmt = $conn->prepare(
                  "INSERT INTO messages (fullname, email, subject, message) VALUES (?, ?, ?, ?)"
                );
                $stmt->bind_param("ssss", $name, $email, $subject, $message);
                if ($stmt->execute()) {
                  $success = "Your message has been sent successfully!";
                } else {
                  $error = "Something went wrong. Please try again.";
                }
                $stmt->close();
              } else {
                $error = "Please fill in all required fields.";
              }
            }
          ?>
          <?php if ($success): ?>
            <div class="alert alert-success"><i class="fas fa-check-circle"></i> <?= $success ?></div>
          <?php endif; ?>
          <?php if ($error): ?>
            <div class="alert alert-error"><i class="fas fa-exclamation-circle"></i> <?= $error ?></div>
          <?php endif; ?>
          <form method="POST" class="contact-form" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Full Name <span>*</span></label>
                <input type="text" id="name" name="name" placeholder="Your full name" required/>
              </div>
              <div class="form-group">
                <label for="email">Email Address <span>*</span></label>
                <input type="email" id="email" name="email" placeholder="your@email.com" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="What's this about?"/>
            </div>
            <div class="form-group">
              <label for="message">Message <span>*</span></label>
              <textarea id="message" name="message" placeholder="Tell me about your project..." rows="6" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-full">
              <i class="fas fa-paper-plane"></i> Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-inner">
        <p>&copy; <?= date('Y') ?> Songelael. Crafted with <i class="fas fa-heart" style="color:#e74c3c"></i> and clean code.</p>
        <a href="#home" class="back-to-top" aria-label="Back to top"><i class="fas fa-arrow-up"></i></a>
      </div>
    </div>
  </footer>

  <script>
    // ---- Typing effect ----
    const roles = ["Full Stack Developer", "PHP Developer", "React Developer", "Problem Solver"];
    let roleIndex = 0, charIndex = 0, isDeleting = false;
    const typedEl = document.getElementById("typed-text");

    function type() {
      const current = roles[roleIndex];
      typedEl.textContent = isDeleting
        ? current.substring(0, charIndex--)
        : current.substring(0, charIndex++);

      let delay = isDeleting ? 60 : 100;
      if (!isDeleting && charIndex === current.length + 1) {
        delay = 1800; isDeleting = true;
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        roleIndex = (roleIndex + 1) % roles.length;
        delay = 400;
      }
      setTimeout(type, delay);
    }
    type();

    // ---- Navbar scroll ----
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
      navbar.classList.toggle("scrolled", window.scrollY > 50);
    });

    // ---- Hamburger ----
    const hamburger = document.getElementById("hamburger");
    const navLinks  = document.getElementById("navLinks");
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("open");
      navLinks.classList.toggle("open");
    });
    hamburger.addEventListener("keydown", e => {
      if (e.key === "Enter" || e.key === " ") hamburger.click();
    });
    navLinks.querySelectorAll("a").forEach(a => {
      a.addEventListener("click", () => {
        hamburger.classList.remove("open");
        navLinks.classList.remove("open");
      });
    });

    // ---- Active nav on scroll ----
    const sections = document.querySelectorAll("section[id]");
    const navItems = document.querySelectorAll(".nav-link");
    window.addEventListener("scroll", () => {
      let current = "";
      sections.forEach(s => {
        if (window.scrollY >= s.offsetTop - 100) current = s.id;
      });
      navItems.forEach(a => {
        a.classList.toggle("active", a.getAttribute("href") === "#" + current);
      });
    });

    // ---- Skill bar animation on scroll ----
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.querySelectorAll(".skill-fill").forEach(bar => {
            bar.style.width = bar.dataset.width + "%";
          });
        }
      });
    }, { threshold: 0.3 });
    const skillsSection = document.getElementById("skills");
    if (skillsSection) observer.observe(skillsSection);

    // ---- Scroll reveal ----
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add("visible");
          revealObserver.unobserve(e.target);
        }
      });
    }, { threshold: 0.1 });
    document.querySelectorAll(".project-card, .stat-card, .contact-card, .tool-badge").forEach(el => {
      el.classList.add("reveal");
      revealObserver.observe(el);
    });
  </script>

</body>
</html>
