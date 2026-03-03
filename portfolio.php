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
                <li>Home</li>
                <li>About</li>
                <li>Contacts</li>
                <li><i class="fas fa-sun"></i></li>
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
</body>
</html>