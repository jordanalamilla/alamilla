/**
 * Update Scroll
 * 
 * Update the scroll state of the site by adding or removing the 'scrolled' class
 * on the body element based on the scroll position.
 */

let lastScrollY = window.scrollY;

export default function updateScroll() {
    const currentScrollY = window.scrollY;

    // Scroll behaviour on home
    if (document.body.classList.contains('home')) {
        if (currentScrollY > 10) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }

        // Scroll behaviour on every other page
    } else {
        if (currentScrollY > lastScrollY) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    }

    lastScrollY = currentScrollY;
}