const links = document.querySelectorAll('.nav-link'); // Select navbar links
const currentFile = window.location.pathname.split('/').pop(); // Get the current file name
const icons = document.querySelectorAll('.material-icons'); // Select all material icons

links.forEach(link => {
    const linkFile = link.getAttribute('href').split('/').pop(); // Get file name from href
    const icon = link.querySelector('.material-icons'); // Select icon inside the link
    
    if (linkFile === currentFile) {
        link.classList.add('active');
        if (icon) {
            icon.classList.add('active-icon'); // Add active class to the icon
        }
    } else {
        link.classList.remove('active');
        if (icon) {
            icon.classList.remove('active-icon'); // Remove active class from the icon
        }
    }
});


