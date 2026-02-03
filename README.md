# Fabio Joseph M. Tugonon - Portfolio Website

A modern, responsive personal portfolio website showcasing technical expertise in Network Engineering and Backend Development.

## 📋 Table of Contents

- [Project Overview](#project-overview)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Getting Started](#getting-started)
- [Features](#features)
- [Customization](#customization)
- [Deployment](#deployment)
- [Browser Support](#browser-support)

## 🎯 Project Overview

This portfolio website serves as a professional online presence, highlighting skills, expertise, and social media connections. The design emphasizes a modern cyberpunk aesthetic with gradient backgrounds, smooth animations, and responsive layouts.

**Key Information:**
- **Name:** Fabio Joseph M. Tugonon
- **Role:** IT Student | Network & Backend Developer
- **Specializations:** Network Engineering, Backend Development, Mobile App Development

## 🛠️ Tech Stack

### Frontend
- **HTML5** - Semantic markup structure
- **CSS3** - Advanced styling with CSS Grid, Flexbox, Gradients, and Animations
- **Font Awesome 6** - Icon library (via `css/all.css`)
- **JavaScript** - (Ready for future interactive features)

### Design Principles
- **Responsive Design** - Mobile-first approach
- **Modern UI** - Gradient backgrounds, glowing effects, smooth transitions
- **Accessibility** - Semantic HTML, proper color contrast

## 📁 Project Structure

```
doc/
├── portfolio.html       # Main HTML file
├── portfolio.css        # Primary stylesheet
├── fabio.jpg            # Profile image
├── css/                 # FontAwesome icons
│   ├── all.css
├── webfonts/            # FontAwesome web fonts
└── README.md            # This file
```

## 🚀 Getting Started

### Prerequisites
- Modern web browser (Chrome, Firefox, Safari, Edge)
- Text editor (VS Code, Sublime, etc.) for modifications
- Web server (optional, for production deployment)

### Installation

1. **Clone or download the project:**
   ```bash
   git clone <repository-url>
   cd doc
   ```

2. **Open the website locally:**
   - Direct approach: Open `portfolio.html` in your browser
   - Server approach: Use a local server (Python, Node.js, etc.)

   **Python 3:**
   ```bash
   python -m http.server 8000
   ```

   **Node.js (with http-server):**
   ```bash
   npx http-server
   ```

3. **Access in browser:**
   ```
   http://localhost:8000
   ```

## ✨ Features

### Design Elements
- **Fixed Navigation Bar** - Persistent header with smooth transitions
- **Hero Section** - Full-viewport layout showcasing profile information
- **Gradient Backgrounds** - Multi-layered gradients (Pink #ff006e to Cyan #00d9ff)
- **Animated Elements** - Rotating portrait frame with dual-color animation
- **Responsive Typography** - Scales appropriately across devices

### Interactive Components
- **Navigation Links** - Smooth underline animation on hover
- **Call-to-Action Button** - "Get CV" button with glow effects
- **Social Media Icons** - Linked to professional profiles with hover animations
- **Smooth Transitions** - All interactive elements feature 0.3s ease transitions

### Responsive Breakpoints
- **Desktop** (1024px+) - Full two-column grid layout
- **Tablet** (768px - 1023px) - Adjusted typography and spacing
- **Mobile** (<768px) - Single column stacked layout

## 🎨 Color Palette

| Color | Hex Code | Usage |
|-------|----------|-------|
| Primary Dark | #0f0f23 | Background |
| Secondary Dark | #1a1a2e | Accents |
| Accent Pink | #ff006e | Primary highlights |
| Accent Cyan | #00d9ff | Secondary highlights |
| Text Light | #ffffff | Primary text |
| Text Muted | #b0b0c0 | Secondary text |

## 📝 Customization

### Updating Personal Information

**Edit in `portfolio.html`:**
```html
<h1 class="primary-title">Your Name</h1>
<span class="subtitle">Your Professional Title</span>
<p>Your bio and description...</p>
```

### Adding Social Media Links

**Edit social icons in `portfolio.html`:**
```html
<a href="your-profile-url" class="social-icon">
    <i class="fab fa-platform-name"></i>
</a>
```

### Changing Colors

**Edit CSS variables in `portfolio.css`:**
```css
:root {
    --primary-dark: #0f0f23;      /* Background */
    --accent-pink: #ff006e;        /* Primary color */
    --accent-cyan: #00d9ff;        /* Secondary color */
    /* ... other variables ... */
}
```

### Updating Profile Image

1. Replace `fabio.jpg` with your image
2. Ensure image is in the `doc/` directory
3. HTML automatically references it

## 🌐 Deployment

### Option 1: GitHub Pages
```bash
# Initialize git repository
git init

# Add and commit files
git add .
git commit -m "Initial portfolio commit"

# Create GitHub repository and push
git remote add origin <github-repo-url>
git branch -M main
git push -u origin main
```

### Option 2: Netlify
1. Connect GitHub repository to Netlify
2. Set build command: `(none required)`
3. Publish directory: `doc`
4. Deploy

### Option 3: Traditional Web Hosting
1. Upload files via FTP/SFTP
2. Ensure `portfolio.html` is in root directory
3. Access via domain

## 🔍 Browser Support

| Browser | Support | Notes |
|---------|---------|-------|
| Chrome | ✅ Full | Latest versions |
| Firefox | ✅ Full | Latest versions |
| Safari | ✅ Full | Latest versions |
| Edge | ✅ Full | Latest versions |
| IE 11 | ⚠️ Partial | Limited CSS support |

**Note:** CSS Grid and CSS custom properties require modern browsers (IE 11 not supported).

## 🎯 Performance Optimization

### Current Implementation
- Clean, production-ready CSS files
- Optimized image loading with `object-fit`
- CSS animations using GPU-accelerated properties

### Future Improvements
- Implement lazy loading for images
- Add service worker for offline support
- Minify custom CSS/JS
- Implement critical CSS inlining

## 📱 Mobile Optimization

The portfolio uses a mobile-first responsive design:

- **Viewport Meta Tag:** Ensures proper scaling on mobile devices
- **Flexible Grid:** CSS Grid automatically adjusts columns
- **Responsive Typography:** Font sizes scale with viewport
- **Touch-Friendly:** Social icons sized for easy mobile interaction

## 🔐 Security Considerations

- All external links use proper protocols (https)
- No sensitive data stored in client-side code
- Content Security Policy ready (can be added via headers)
- Input validation ready for future forms

## 📚 Resources Used

- [FontAwesome Icons](https://fontawesome.com/) - Icon library
- [CSS Grid Layout](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout) - Layout system
- [CSS Animations](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Animations) - Motion effects
- [Responsive Web Design](https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design) - Mobile adaptation

## 🤝 Contributing

This is a personal portfolio project. For modifications:

1. Create a new branch: `git checkout -b feature/improvement`
2. Make changes
3. Test responsiveness across devices
4. Commit with clear messages: `git commit -m "Add feature description"`
5. Push to branch: `git push origin feature/improvement`

## 📄 License

This project is personal portfolio work. Feel free to use as inspiration for your own portfolio.

## ✉️ Contact & Social Links

- **Facebook:** [FabLords.050604](https://www.facebook.com/FabLords.050604/)
- **Instagram:** [@fablords.050604](https://www.instagram.com/fablords.050604/)
- **LinkedIn:** [Fabio Joseph Tugonon](https://www.linkedin.com/in/fabio-joseph-tugonon-906788305/)
- **GitHub:** [FabLords05](https://github.com/FabLords05/)

## 📝 Changelog

### Version 1.1.0 (Current)
- Renamed files for consistency: `index.html` → `portfolio.html`, `style.css` → `portfolio.css`
- Removed unnecessary CSS files: all `.min.css` variants and v4 compatibility files
- Streamlined project structure for better maintainability

### Version 1.0.0
- Initial portfolio launch
- Modern cyberpunk design with gradient backgrounds
- Responsive layout with mobile optimization
- Social media integration
- Smooth animations and transitions
- Cross-browser compatibility

## 🚧 Future Enhancements

- [ ] Add projects showcase section
- [ ] Implement dark/light theme toggle
- [ ] Add contact form with email integration
- [ ] Create blog/articles section
- [ ] Add skills visualization (progress bars)
- [ ] Implement smooth scroll behavior
- [ ] Add PDF CV download functionality
- [ ] Create case studies for projects

---

**Last Updated:** January 19, 2026  
**Version:** 1.1.0  
**Status:** Active
