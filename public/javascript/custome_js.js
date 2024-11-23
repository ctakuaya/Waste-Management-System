const toggleButton = document.getElementById('toggle-sidebar');
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('content');

toggleButton.addEventListener('click', () => {
    sidebar.classList.toggle('toggled');
    content.classList.toggle('toggled');
});