import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.group');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseover', () => {
            dropdown.querySelector('.dropdown-menu').classList.remove('hidden');
        });

        dropdown.addEventListener('mouseout', () => {
            dropdown.querySelector('.dropdown-menu').classList.add('hidden');
        });
    });

    document.getElementById('scroll-to-top').addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
