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

ScrollReveal().reveal('.subtitle', { delay: 70 });

ScrollReveal().reveal('.title', { delay: 70 });

ScrollReveal().reveal('.introduction', { delay: 70 });

ScrollReveal().reveal('.caption', { delay: 70 });

ScrollReveal().reveal('.right-caption', { delay: 70 });

ScrollReveal().reveal('.visual', { delay: 70 });

ScrollReveal().reveal('.text', { delay: 70 });

ScrollReveal().reveal('.partners', { delay: 70, interval: 100 });
