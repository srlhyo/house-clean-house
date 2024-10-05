const avatarButton = document.getElementById('avatar-button');
const rightSidebar = document.getElementById('right-sidebar');
const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebar-toggle');
let rightSidebarOpen = false;

avatarButton.addEventListener('click', () => {
    rightSidebarOpen = !rightSidebarOpen;
    if (rightSidebarOpen) {
        rightSidebar.classList.remove('translate-x-full');
    } else {
        rightSidebar.classList.add('translate-x-full');
    }
});

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
});

// Close right sidebar when clicking outside
document.addEventListener('click', (event) => {
    if (rightSidebarOpen && !rightSidebar.contains(event.target) && event.target !== avatarButton) {
        rightSidebar.classList.add('translate-x-full');
        rightSidebarOpen = false;
    }
});

// Responsive sidebar behavior
const handleResize = () => {
    if (window.innerWidth >= 1024) {
        sidebar.classList.remove('-translate-x-full');
    } else {
        sidebar.classList.add('-translate-x-full');
    }
};

window.addEventListener('resize', handleResize);
handleResize();