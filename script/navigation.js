const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
let menuOpen = false;

hamburger.addEventListener('click', () => {
    if(menuOpen == false) {
        navLinks.classList.add('active');
        hamburger.classList.add('active');
        document.body.classList.add('menu-open');
        menuOpen = true;
        
        // Add entrance animation for each nav item
        const navItems = document.querySelectorAll('.nav-links li');
        navItems.forEach((item, index) => {
            item.style.transitionDelay = `${0.1 * (index + 1)}s`;
        });
    }
    else if (menuOpen == true) {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.classList.remove('menu-open');
        menuOpen = false;
        
        // Reset transition delays
        const navItems = document.querySelectorAll('.nav-links li');
        navItems.forEach(item => {
            item.style.transitionDelay = '0s';
        });
    }
});

// Close menu when clicking on a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        // Add a small delay to show the click effect before closing
        setTimeout(() => {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
            document.body.classList.remove('menu-open');
            menuOpen = false;
            
            // Reset transition delays
            const navItems = document.querySelectorAll('.nav-links li');
            navItems.forEach(item => {
                item.style.transitionDelay = '0s';
            });
        }, 150);
    });
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    const nav = document.querySelector('nav');
    const isClickInsideNav = nav.contains(e.target);
    
    if (!isClickInsideNav && menuOpen) {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.classList.remove('menu-open');
        menuOpen = false;
        
        // Reset transition delays
        const navItems = document.querySelectorAll('.nav-links li');
        navItems.forEach(item => {
            item.style.transitionDelay = '0s';
        });
    }
});

// Close menu on escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && menuOpen) {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.classList.remove('menu-open');
        menuOpen = false;
        
        // Reset transition delays
        const navItems = document.querySelectorAll('.nav-links li');
        navItems.forEach(item => {
            item.style.transitionDelay = '0s';
        });
    }
});