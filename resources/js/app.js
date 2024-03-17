import './bootstrap';
import 'flowbite';

const sun = document.getElementById('sun'),
moon = document.getElementById('moon'),
body = document.body;

sun.addEventListener('click', () => {
    body.classList.remove('dark');
    body.classList.add('light');
});

moon.addEventListener('click', () => {
    body.classList.remove('light');
    body.classList.add('dark');
});