const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
let menuOpen = false;

hamburger.addEventListener('click', () => {
    if(menuOpen == false) {
        navLinks.classList.add('active');
        hamburger.classList.add('active');
        document.body.classList.add('menu-open');
        menuOpen = true; 
    }
    else if (menuOpen == true) {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.classList.remove('menu-open');
        menuOpen = false;
    }
});

// Close menu when clicking on a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
        document.body.classList.remove('menu-open');
        menuOpen = false;
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
    }
});