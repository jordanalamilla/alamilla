/**
 * Post Slider Block JavaScript
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
    document.querySelectorAll('.ps-splide').forEach((carousel) => {
        new Splide(carousel, {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: '1rem',
            breakpoints: {
                1024: {
                    perPage: 2,
                },
                540: {
                    perPage: 1,
                },
            },
        }).mount();
    });
});