  //to color the navbar when active 
   document.querySelectorAll('.header-main-nav a').forEach(link => {
        link.addEventListener('click', function () {
            // Remove 'active' from all links
            document.querySelectorAll('.header-main-nav a').forEach(el => el.classList.remove('active'));
            // Add 'active' to the clicked link
            this.classList.add('active');
        });
    });

