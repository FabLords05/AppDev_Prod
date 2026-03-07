<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header-wrapper">
        <nav class="top-nav" style="display:flex; justify-content: space-between; align-items: center;">
            <div class="nav-brand"><span>My</span>Portfolio</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contacts">Contacts</a></li>
                <li class="theme-toggle" id="themeToggle"><i class="fas fa-sun"></i></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-wrapper" id="home">
            <div class="profile-circle">
                <img src="<?php echo $profile_img; ?>" alt="Profile">
            </div>
            <h1 class="primary-title"><?php echo $name; ?></h1>
            <span class="subtitle"><?php echo $role; ?></span>
            <div class="hero-info">
                <p><?php echo $age; ?></p>
                <p>Lives in <?php echo $location; ?></p>
            </div>
            <div class="description">
                <p><?php echo $hero_desc; ?></p>
            </div>
        </section>

        <section class="timeline-container" id="about">
            <h2 class="section-title">About Me</h2>
            <?php foreach($about_items as $item): ?>
            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="<?php echo $item['icon']; ?>" alt="icon">
                </div>
                <h3><?php echo $item['title']; ?></h3>
                <p style="color:var(--primary-green); font-weight:bold;"><?php echo $item['year']; ?></p>
                <p style="margin-top:15px;"><?php echo $item['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </section>

        <section class="contact-grid" id="contacts">
            <div class="contact-left">
                <h3 style="letter-spacing:2px;">LOCATION</h3>
                <p style="margin: 15px 0 40px; color: var(--text-muted);"><?php echo $location; ?></p>
                <h3 style="letter-spacing:2px;">FOLLOW ME</h3>
                <div class="social-links">
                    <?php foreach($socials as $social): ?>
                        <a href="<?php echo $social['link']; ?>" class="social-icon">
                            <i class="<?php echo $social['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="contact-right">
                <h3 style="color: var(--primary-green); font-size: 28px; margin-bottom: 20px;">Contact Details</h3>
                <p>• <?php echo $email; ?></p>
            </div>
        </section>
    </main>

    <script>
        // Initialize theme from localStorage
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        const savedTheme = localStorage.getItem('theme') || 'light';
        
        // Apply saved theme
        html.setAttribute('data-theme', savedTheme);
        updateThemeIcon(savedTheme);
        
        // Toggle theme on click
        themeToggle.addEventListener('click', () => {
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        });
        
        function updateThemeIcon(theme) {
            const icon = themeToggle.querySelector('i');
            if (theme === 'light') {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            } else {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            }
        }
    </script>
</body>
</html>