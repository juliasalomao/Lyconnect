
document.addEventListener('DOMContentLoaded', function() {
    const userIcon = document.querySelector('.user-icon');
    const modal = document.getElementById('contactModal');
    const closeButton = document.querySelector('.close-button');

    userIcon.addEventListener('click', function() {
        modal.style.display = 'flex';
    });

    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});


