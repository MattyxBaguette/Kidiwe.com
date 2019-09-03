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

ScrollReveal().reveal('.subtitle', { delay: 300 });

ScrollReveal().reveal('.title', { delay: 300 });

ScrollReveal().reveal('.introduction', { delay: 300 });

ScrollReveal().reveal('.caption', { delay: 300 });

ScrollReveal().reveal('.right-caption', { delay: 300 });

ScrollReveal().reveal('.visual', { delay: 300 });

ScrollReveal().reveal('.text', { delay: 300 });

ScrollReveal().reveal('.partners', { delay: 300, interval: 150 });
