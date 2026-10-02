
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const genre = document.querySelector('select[name="genre"]');
    const mood = document.querySelector('select[name="mood"]');
    const button = form.querySelector('button[type="submit"]');

    if (!form || !genre || !mood || !button) {
        return;
    }

    form.addEventListener("submit", function (event) {
        // Check whether the user selected a genre and mood
        if (genre.value === "" || mood.value === "") {
            event.preventDefault();

            alert("Please select both a genre and a mood!");

            return;
        }

        // Show loading feedback
        button.disabled = true;
        button.textContent = "Finding your song...";

        // The form will submit to PHP normally
    });
});