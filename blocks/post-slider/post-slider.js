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
            perPage: 4,
            perMove: 1,
            gap: '2rem',
            pagination: false,
            breakpoints: {
                1800: {
                    perPage: 3,
                },
                1300: {
                    perPage: 2,
                },
                760: {
                    perPage: 1,
                },
            },
        }).mount();
    });
});