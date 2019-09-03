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

ScrollReveal().reveal('.subtitle', { delay: 100 });

ScrollReveal().reveal('.title', { delay: 100 });

ScrollReveal().reveal('.introduction', { delay: 100 });

ScrollReveal().reveal('.caption', { delay: 100 });

ScrollReveal().reveal('.right-caption', { delay: 100 });

ScrollReveal().reveal('.visual', { delay: 100 });

ScrollReveal().reveal('.text', { delay: 100 });

ScrollReveal().reveal('.partners', { delay: 100, interval: 150 });
