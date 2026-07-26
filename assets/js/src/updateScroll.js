/**
 * Update Scroll
 * 
 * Update the scroll state of the site by adding or removing the 'scrolled' class
 * on the body element based on the scroll position.
 */

let lastScrollY = window.scrollY;

export default function updateScroll() {
    const currentScrollY = window.scrollY;

    if (currentScrollY > lastScrollY) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }

    lastScrollY = currentScrollY;
}