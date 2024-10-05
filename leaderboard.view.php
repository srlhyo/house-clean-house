<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEROOMIES Leaderboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sidebar-bg': '#f3f4f6',
                        'sidebar-hover': '#e5e7eb',
                        'sidebar-active': '#3b82f6',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen flex bg-gray-100">
    <!-- Left Sidebar -->
    <aside class="bg-sidebar-bg w-64 min-h-screen flex flex-col shadow-lg transition-all duration-300 ease-in-out lg:translate-x-0" id="sidebar">
        <div class="p-4 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-900">BEROOMIES</h1>
        </div>
        <nav class="flex-grow mt-5 px-2"><!-- text-white bg-sidebar-active -->
            <a href="/" class="flex items-center px-4 py-3 text-gray-600 hover:bg-sidebar-hover rounded-lg mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                Dashboard
            </a>
            <a href="/tasks.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-sidebar-hover rounded-lg mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                </svg>
                Tasks
            </a>
            <a href="/leaderboard.php" class="flex items-center px-4 py-3 text-white bg-sidebar-active rounded-lg mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                Leaderboard
            </a>
            <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-sidebar-hover rounded-lg mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                Funding Pot
            </a>
            <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-sidebar-hover rounded-lg mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Calendar
            </a>
            <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-sidebar-hover rounded-lg mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Events
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <header class="bg-white shadow-sm z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex items-center justify-between">
                <div class="flex items-center">
                    <button id="sidebar-toggle" class="mr-4 text-gray-500 lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <h1 class="text-2xl font-semibold text-gray-900">Leaderboard</h1>
                </div>
                <div class="flex items-center">
                    <button class="p-2 rounded-full text-gray-400 hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <div class="ml-3 relative">
                        <div>
                            <button id="avatar-button" class="flex items-center max-w-xs bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="">
                                <span class="ml-3 text-sm font-medium text-gray-700">Jonas Maluco</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <p>Here is the Leaderboard page</p>
            </div>
        </main>
    </div>

    <!-- Right Sidebar -->
    <aside id="right-sidebar" class="fixed right-0 top-0 bottom-0 w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-200 ease-in-out">
        <div class="p-4">
            <h2 class="text-lg font-medium text-gray-900 mb-4">User Menu</h2>
            <nav class="space-y-2">
                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profile
                </a>
                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                </a>
                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    Subscriptions
                </a>
                <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </a>
            </nav>
        </div>
    </aside>

    <script>
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
    </script>
</body>
</html>