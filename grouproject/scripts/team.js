
// finds the team page 
const teamSections = document.querySelectorAll(
    "#faculty .container, " +
    "#research .container, " +
    "#developers .container, " +
    "#team .container"
);

// Checks whether the browser supports IntersectionObserver.
if ("IntersectionObserver" in window) {

    // Watches the containers as the user scrolls.
    const teamObserver = new IntersectionObserver(
        function(entries) {

            entries.forEach(function(entry) {

                // Runs when at least part of the container is visible.
                if (entry.isIntersecting) {

                    // Adds the class that activates the CSS animation.
                    entry.target.classList.add("show");

                    // Stops watching after the animation happens once.
                    teamObserver.unobserve(entry.target);
                }
            });
        },
        {
            // Starts the animation when 15% of the container is visible.
            threshold: 0.15
        }
    );

    // Starts watching each team-page container.
    teamSections.forEach(function(section) {
        teamObserver.observe(section);
    });

} 