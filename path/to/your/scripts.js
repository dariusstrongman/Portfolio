// Example of a simple fade-in effect
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach(el => {
        el.style.opacity = 0;
        el.style.transition = 'opacity 1s ease-in-out';
        el.style.opacity = 1;
    });
}); 