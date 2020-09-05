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






var i=0,text;
  text = "  I'm web developer Khalid saaf <br>"

  function typing() {
    if(i<text.length){
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(typing,90);
    }
  }
  typing();
