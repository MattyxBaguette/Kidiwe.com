
// Lazy image load

const lazyElements = Array.from(document.querySelectorAll('.lazy'));

for (const lazyElement of lazyElements) {

    const image = document.createElement('img');

    image.addEventListener('load', () => {
        lazyElement.style.backgroundImage = `url(${lazyElement.dataset.src})`;
        lazyElement.classList.add('loaded');
    });
    image.setAttribute('src', lazyElement.dataset.src);
}

// Custom cursor

let clientX = -100;
let clientY = -100;

const outerCursor = document.querySelector('.circle');
const innerCursor = document.querySelector('.cursor');

const Cursor = () => {

    document.addEventListener("mousemove", e => {
        clientX = e.clientX;
        clientY = e.clientY;
    });

    const render = () => {
        outerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
        innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;

        requestAnimationFrame(render);
    };

    requestAnimationFrame(render);
};

Cursor();

// Scroll to a certain element

// $see_more = document.querySelector('.btn');
// $learning_expedition = document.querySelector('.learning-expedition');
// // $learning_expedition = document.getElementById('learning-expedition');
//
// $see_more.addEventListener("click", ()=> $learning_expedition.scrollIntoView({
//     behavior: 'smooth', block: "end", inline: "nearest"
// }));


// Scroll reveal

ScrollReveal().reveal('.subtitle', { delay: 70 });

ScrollReveal().reveal('.title', { delay: 70 });

ScrollReveal().reveal('.introduction', { delay: 70 });

ScrollReveal().reveal('.caption', { delay: 70 });

ScrollReveal().reveal('.right-caption', { delay: 70 });

ScrollReveal().reveal('.visual', { delay: 70 });

ScrollReveal().reveal('.text', { delay: 70 });

ScrollReveal().reveal('.partners', { delay: 70, interval: 100 });
