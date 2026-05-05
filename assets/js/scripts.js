/**
 * Custom JavaScript for the Alamilla Theme.
 */

// Block theme color change functionality.
import themeObserver from "./src/themeObserver.js";
import updateScroll from "./src/updateScroll.js";

// Theming
themeObserver();

// Menu visibility
window.addEventListener('scroll', () => {
    window.requestAnimationFrame(updateScroll);
});