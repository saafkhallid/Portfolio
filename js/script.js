const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navMenu');
    const navMenu = document.querySelectorAll('.navMenu li');

    //toggle nav
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        //animate links
        navMenu.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 3s ease forwards ${index / 9 - 1 }s`;
            }
        });
        //animate close menu
        burger.classList.toggle('toggle');
    });

}

