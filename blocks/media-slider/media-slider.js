/**
 * Media Slider Block JavaScript
 * 
 * This script initializes the Splide JS slider for the Media Slider block.
 * It waits for the DOM to be fully loaded before mounting the slider on elements
 * with the class 'splide'.
 */

document.addEventListener("DOMContentLoaded", () => {

    /**
     * Splide JS slider initialization.
     * 
     * Options available at: https://splidejs.com/guides/options/
     */
    document.querySelectorAll('.ms-splide').forEach((carousel) => {
        new Splide(carousel, {
            type: 'fade',
            rewind: true,
            autoplay: true,
            interval: 8000,
            pagination: false,
            arrows: false,
            speed: 3000,
            pauseOnHover: false,
        }).mount();
    });
});