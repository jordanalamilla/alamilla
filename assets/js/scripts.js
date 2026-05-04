/**
 * Custom JavaScript for the Alamilla Theme.
 */

// Block theme color change functionality.
import themeObserver from "./src/themeObserver.js";
import updateScroll from "./src/updateScroll.js";

themeObserver();

window.addEventListener('scroll', () => {
    window.requestAnimationFrame(updateScroll);
});