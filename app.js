// app.js

document.addEventListener('DOMContentLoaded', function () {
    // Load the initial page based on the URL
    const initialPage = location.hash.split('=')[1] || 'home';
    loadPage(initialPage);

    // Handle back/forward navigation
    window.addEventListener('popstate', function (event) {
        const page = location.hash.split('=')[1] || 'home';
        loadPage(page, false);
    });
});

// Function to load the page content
function loadPage(page, pushState = true) {
    const contentDiv = document.getElementById('content');
    
    // Perform an AJAX request to get the page content
    fetch(`load_page.php?page=${page}`)
        .then(response => response.json())
        .then(data => {
            contentDiv.innerHTML = data.content;
            document.title = data.title; // Update the page title

            // Update the URL without reloading the page
            if (pushState) {
                history.pushState(null, data.title, `#page=${page}`);
            }
        })
        .catch(error => {
            contentDiv.innerHTML = 'Page not found.';
            document.title = 'Page not found'; // Update the page title
            console.error('Error loading page:', error);
        });
}
