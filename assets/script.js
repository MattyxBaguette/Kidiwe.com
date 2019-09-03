// Custom cursor

let $cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', (e) => {
    x = e.clientX;
    y = e.clientY;
    
    $cursor.style.left = x + 'px';
    $cursor.style.top = y + 'px';
    
    console.log(x);
    console.log(y);

});

// Scroll reveal

ScrollReveal().reveal('.subtitle', { delay: 750 });

ScrollReveal().reveal('.title', { delay: 750 });

ScrollReveal().reveal('.introduction', { delay: 750 });

ScrollReveal().reveal('.caption', { delay: 750 });

ScrollReveal().reveal('.right-caption', { delay: 750 });

ScrollReveal().reveal('.visual', { delay: 750 });

ScrollReveal().reveal('.text', { delay: 750 });

ScrollReveal().reveal('.partners', { delay: 750, interval: 200 });
