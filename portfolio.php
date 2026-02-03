<?php include 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header-wrapper">
        <nav class="top-nav">
            <div class="nav-brand">FJT</div>
            <ul class="nav-links">
                <li><a href="#intro">Intro</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#connect">Connect</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <div class="hero-wrapper" id="intro">
            <div class="content-section">
                <h1 class="primary-title"><?php echo $name; ?></h1>
                <span class="subtitle"><?php echo $role; ?></span>
                <div class="description">
                    <p><?php echo $hero_desc; ?></p>
                </div>   
            </div>
            <div class="media-section">
                <div class="portrait-frame">
                    <div class="portrait-container">
                        <img src="<?php echo $profile_img; ?>" alt="<?php echo $name; ?>">
                    </div>
                </div>
            </div>
        </div>

        <section id="expertise" class="section-wrapper">
            <h2 class="section-title">Technical <span class="highlight">Expertise</span></h2>
            <div class="grid-container">
                <?php foreach($skills as $skill): ?>
                <div class="card">
                    <div class="card-icon"><i class="<?php echo $skill['icon']; ?>"></i></div>
                    <h3><?php echo $skill['name']; ?></h3>
                    <p><?php echo $skill['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="projects" class="section-wrapper">
            <h2 class="section-title">Featured <span class="highlight">Projects</span></h2>
            <div class="grid-container">
                <?php foreach($projects as $project): ?>
                <div class="project-card">
                    <div class="card-content">
                        <span class="project-cat"><?php echo $project['cat']; ?></span>
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="connect" class="section-wrapper">
            <h2 class="section-title">Get in <span class="highlight">Touch</span></h2>
            <div class="grid-container connect-grid">
                <div class="contact-card">
                    <h3>Contact Me</h3>
                    <p>Have a project or just want to say hi? Reach out via email or connect on social media.</p>
                    <p class="contact-email">Email: <?php echo $email; ?></p>
                    <div class="social-links" style="margin-top:16px;">
                        <?php foreach($socials as $social): ?>
                            <a href="<?php echo $social['link']; ?>" class="social-icon" target="_blank">
                                <i class="<?php echo $social['icon']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="fixed-bottom-bar" aria-hidden="false">
        <a href="fabio_cv.pdf" class="btn btn-cv" download aria-label="Download CV"><i class="fas fa-download" aria-hidden="true"></i><span class="btn-text">Get CV</span></a>
        <a href="#connect" class="btn btn-contact">Contacts</a>
    </div>
</body>
</html>