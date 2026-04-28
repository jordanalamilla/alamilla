/**
 * Theme Observer
 * 
 * Functionality to detect when elements with theme trigger classes are in view and change the theme accordingly.
 */
export default function themeObserver() {

    // Store the previous theme class.
    const prevColor = false;

    // List of theme color names based on theme.json.
    const wpThemeColors = [
        'base',
        'contrast',
        'accent-1',
        'accent-2',
        'accent-3',
        'accent-4',
        'accent-5',
        'accent-6',
    ];

    wpThemeColors.forEach((themeColor) => {
        const triggers = document.querySelectorAll(".theme-trigger-" + themeColor);

        // When trigger element is in view ...
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {

                        // Remove the previous theme ...
                        if (prevColor) {
                            document.body.classList.remove(prevColor);
                        }

                        // Apply the new theme and store it.
                        document.body.classList.add("theme-" + themeColor);
                        prevColor = "theme-" + themeColor;
                    } else {

                        // If there is no theme to switch to, remove the current theme.
                        document.body.classList.remove("theme-" + themeColor);
                    }
                });
            },
            {
                threshold: 0.1
            }
        );

        triggers.forEach((el) => observer.observe(el));
    });
}